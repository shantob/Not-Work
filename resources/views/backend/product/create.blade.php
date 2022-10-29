<x-admin.master>
    <!-- partial -->
    <x-slot:title>

        ADD PEODUCT
        </x-slot>

        <!-- Main Wrapper -->

        <!-- Main Wrapper -->
        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <h4 class="page-title">ADD Product</h4>

                    <a href="{{ route('product.index') }}"><button class="btn btn-warning">
                            << Go Back</button></a>
                    <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <div class="card-body">

                                                <x-admin.forms.input type="text" label="Product Name"
                                                    class="form-control" name="name" id="title"
                                                    placeholder="Enter Product name" value="{{ old('name') }}" />


                                                <x-admin.forms.textarea name="description" label="Product Description"
                                                    class="bg-light form-control" value="{{ old('description') }}"
                                                    placeholder="Type Description" />

                                                <x-admin.forms.input type="number" name="price" id="price"
                                                    label="Price Of Product" class="form-control"
                                                    value="{{ old('price') }}" />

                                            </div>
                                            <div class="card-action">
                                                <button class="btn btn-success" type="submit"><i
                                                        class="glyphicon glyphicon-plus"></i>Update</button>
                                                <button class="btn btn-danger">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <div class="card-body">
                                                <select name="category" class="form-control" id="category">
                                                    <option value="Snikers">Snikers</option>
                                                    <option value="Garments">Garments</option>
                                                    <option value="Electricital">Electricital</option>
                                                </select>
                                                <div class="mb-3">
                                                    <label class="input-lable" for="">
                                                        Image Upload</label>
                                                    <input type="file" class="form-control"name="image" multiple />
                                                </div>


                                                <x-admin.forms.input type="text" name="brand" label="Brand"
                                                    id="brand" class="form-control" value="{{ old('brand') }}" />


                                                <div class="mb-3 form-check">
                                                    <input name="status" type="checkbox" class="form-check-input"
                                                        id="status">
                                                    <label class="form-check-label" for="status">Is
                                                        Status</label>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </form>
                </div>
            </div>
        </div>






        <x-admin.partials.footer />

        </div>
        </x-admin>
