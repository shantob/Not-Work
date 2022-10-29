<?php

namespace App\Http\Controllers\Forntend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Card;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function header()
   {
      return view('components.forntend.partials.header');
   }


   public function index()
   {
      if ($key = request('product_name')) {

         $productall = Product::latest()
            ->where('name', 'SOUNDS LIKE', $key . "%")
            // ->where("SOUNDEX('name_am') = SOUNDEX($key)")
            ->paginate(2)
            ->fragment('productall');
      } else {
         $productall = Product::latest()->paginate(12)->fragment('productall');
      }

      return view("forntend/index", compact('productall'));
   }

   public function productDetails(Product $product)
   {
      return view('forntend/productdetels', compact('product'));
   }



   public function productlist()
   {
      $productall = Product::paginate(15)->get();

      return view("forntend/productlist", compact('productall'));
   }
}
