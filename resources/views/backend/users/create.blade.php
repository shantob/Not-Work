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
                                            <form method="POST" action="{{ route('register') }}">
                                                @csrf

                                                <p class="text-center">or:</p>

                                                <!-- Name input -->
                                                <div class="form-outline mb-4">
                                                    <input type="text" id="name" class="form-control"
                                                        name="name" :value="old('name')" />
                                                    <label class="form-label" for="registerName">Name</label>
                                                    <x-input-error :messages="$errors->get('name')"
                                                        class=" form-label text-danger mx-5" />

                                                    </label>
                                                </div>

                                                <!-- Username input -->
                                                <div class="form-outline mb-4">
                                                    <input type="email" id="email" name="email"
                                                        :value="old('email')" class="form-control" />
                                                    <label class="form-label" for="email">Type Email</label>
                                                    <x-input-error :messages="$errors->get('email')"
                                                        class=" form-label text-danger mx-5" />
                                                </div>


                                                <!-- Email input -->


                                                <!-- Password input -->
                                                <div class="form-outline mb-4">
                                                    <input type="password" name="password" id="password"
                                                        class="form-control" />
                                                    <label class="form-label" for="password">Password</label>
                                                    <x-input-error :messages="$errors->get('password')"
                                                        class=" form-label text-danger mx-5" />

                                                </div>

                                                <!-- Repeat Password input -->
                                                <div class="form-outline mb-4">
                                                    <input type="password" name="password_confirmation"
                                                        id="password_confirmation" autocomplete="new-password"
                                                        class="form-control" />
                                                    <label class="form-label" for="password_confirmation">Repeat
                                                        password</label>
                                                    <x-input-error :messages="$errors->get('password_confirmation')"
                                                        class=" form-label text-danger mx-5" />

                                                </div>
                                                <div class="form-outline mb-4">
                                                    <label class="form-label" for="file">Input Your Photo</label>

                                                    <input type="file" id="file" name="image" />
                                                </div>
                                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                                                <!-- Checkbox -->
                                                <div class="form-check d-flex justify-content-center mb-4">
                                                    <input class="form-check-input me-2" type="checkbox" value=""
                                                        id="registerCheck" checked
                                                        aria-describedby="registerCheckHelpText" />
                                                    <label class="form-check-label" for="registerCheck">
                                                        I have read and agree to the terms
                                                    </label>
                                                </div>

                                                <!-- Submit button -->
                                                <button type="submit" class="btn btn-primary btn-block mb-3">Register
                                                    Now</button>
                                            </form>
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
