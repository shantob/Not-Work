<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use Image;

class ProductController extends Controller
{
    // public function index()
    // {
    //     $allproduct = Product::all();
    //     $index = Product::orderby('id', 'DESC')->paginate(10);
    //     return view("backend/product/index", compact('index', 'allproduct'));
    // }

    public function index()
    {
        $paginatePerPage = 20;
        $serialNo = 1;
        if ($pageNumber = request('page')) {
            $serialNo = $paginatePerPage * ($pageNumber - 1) + 1;
        }
        //dd($serialNo);
        $allproduct = Product::all();
        $productlist = Product::orderby('id', 'DESC')->paginate($paginatePerPage);

        // $category = Category::with('category')->find('all');
        // $categories= $category->category->toArray();


        return view("backend.product.index", compact('productlist', 'allproduct', 'serialNo'));
    }
    //
    public function store(ProductRequest $request)
    {
        // dd($request);
        $data = [

            'name' => $request->name,
            'category' => $request->category,
            'brand' => $request->brand,
            'description' => $request->description,
            'price' => $request->price,
            'status' => $request->is_active ? true : false,
        ];

        $product = Product::create($data);
        foreach ($request->file('image') as $img) {
            $product->images()->create([
                'image' => $this->uploadImage($img),
                'uploated_by' => Auth::id()
            ]);
        }
        return redirect()->route('product.index')->with('success', 'Product Created SuccessFully !!!');
    }


    public function create()
    {

        return view("backend.product.create");
    }


    public function edit(Product $product)
    {

        return view("backend.product.edit", compact('product'));
    }


    public function update(ProductRequest $request, Product $product)
    {
        // $products = Product::find($id);

        $data = [

            'name' => $request->name,
            'category' => $request->category,
            'brand' => $request->brand,
            'description' => $request->description,
            'price' => $request->price,
            'status' => $request->is_active ? true : false,
        ];
        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadImage($request->file('image'));
        }


        $product->update($data);
        $product->images()->create([
            'image' => $this->uploadImage($request->file('image')),

            'uploated_by' => Auth::id()
        ]);

        return redirect()->route('product.index')->with('success', 'Product Updated SuccessFully !!!');
    }

    public function show(Product $product)
    {

        return view("backend.product.show", compact('product'));
    }

    public function destroy(Product $product)
    {
        // $productDelete = Product::find($id);
        $product->delete();
        return redirect()->route('product.index')->with('success', 'Product Delete SuccessFully !!!');
    }

    public function trash()
    {

        $product = Product::onlyTrashed()->get();
        return view("backend/product/trash", compact('product'));
    }
    public function restore($id)
    {
        $product = Product::onlyTrashed()->find($id);
        $product->restore();
        return redirect()->route('product.trash')->with('success', 'SuccessFully Restored Category');
    }

    public function delete($id)
    {
        //dd($id);

        $product = Product::onlyTrashed()->find($id);
        $product->colors()->detach();
        $product->forceDelete();

        return redirect()
            ->route('product.trash')
            ->with('success', 'Parmanent Deleted Successfully!');
    }
    public function downloadPdf()
    {
        $products = Product::all();
        $pdf = Pdf::loadView('backend.product.pdf', compact('products'));
        return $pdf->download('product-list.pdf');
    }

    public function uploadImage($file)
    {
        $fileName = date('y-m-d') . '-' . time() . '.' . $file->getClientOriginalExtension();
        // $file->move(storage_path('app/public/categories'), $fileName);

        Image::make($file)
            ->resize(200, 200)
            ->save(storage_path() . '/app/public/products/' . $fileName);

        return $fileName;
    }
}
