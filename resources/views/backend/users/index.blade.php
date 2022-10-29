<x-admin.master>
    <!-- partial -->
    <x-slot:title>

        PRODUCT LIST
        </x-slot>

        <!-- Main Wrapper -->

        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <h4 class="page-title">Dashboard</h4>
                    <div class="row">
                        <div class=" my-container active-cont">
                            <!-- Top Nav -->

                            <!--End Top Nav -->

                            <br>
                            <br>
                            <div class="col-md-10">

                                <div class="main-content">


                                    <div class="col-md-12 mx-5">
                                        <div class="card">
                                            <h3 class="text-right"><a href="{{ route('users.create') }}"
                                                    class="btn btn-danger">Add New</a></h3>
                                            <div class="card-body  text-center">
                                                <div class=" w-100 ">
                                                    <div class=" px-2">
                                                        <label for="caregory" class="mb-4 h1 text-dark">List
                                                            User</label>
                                                        <input type="text" class="form-control" id="product_search"
                                                            onkeyup="searchFun()" placeholder="Search User">
                                                        <table class="table table table-hover" id="product_table">

                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">User</th>
                                                                <th scope="col">Email</th>
                                                                <th scope="col">Created At</th>

                                                                <th colspan="2" scope="col">Action</th>

                                                                @foreach ($users as $user)
                                                            <tr>
                                                                <th scope="row">{{ $loop->iteration }}</th>
                                                                <td>{{ $user->name }}</td>
                                                                <td>{{ $user->email }}</td>
                                                                <td>{{ $user->created_at }}</td>

                                                                <td class="d-flex">
                                                                    <a href="{{ route('users.show', $user->id) }}">
                                                                        <button type="submit"
                                                                            class="btn btn-info w-100">Show
                                                                        </button>
                                                                    </a>

                                                                </td>

                                                            </tr>
                                                            @endforeach


                                                        </table>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>



                </div>
            </div>

            <x-admin.partials.footer />

        </div>

        </x-admin>
        <!-- Main Wrapper -->
