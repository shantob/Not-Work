<div class="sidebar bg-dark">
    <div class="scrollbar-inner sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="{{ asset('assets/admin/img/profile.jpg') }}">
            </div>
            <div class="info">
                <a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                    <span class=" text-light">
                        {{ Auth::user()->name }}
                        <span class="caret"></span>
                    </span>
                </a>
                <div class="clearfix"></div>

                <div class="collapse in" id="collapseExample" aria-expanded="true" style="">
                    <ul class="nav">
                        <li>
                            <a href="#profile">
                                <span class="link-collapse  text-light">My Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="#edit">
                                <span class="link-collapse text-light">Edit Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="#settings">
                                <span class="link-collapse text-light">Settings</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav ">
            <li class="nav-item {{ Route::is('admin.home') ? 'active' : '' }}">
                <a href="{{ route('admin.home') }}">
                    <i class="la la-dashboard"></i>
                    <p class=" text-warning">Dashboard</p>
                </a>
            </li>

            <li class="nav-item {{ Route::is('product.index') ? 'active' : '' }}">
                <a href="{{ route('product.index') }}">
                    <i class="la la-table"></i>
                    <p class=" text-warning">All Product</p>
                </a>
            </li>
            <li class="nav-item {{ Route::is('product.create') ? 'active' : '' }}">
                <a href="{{ route('product.create') }}">
                    <i class="la la-table"></i>
                    <p class=" text-warning">Add Product</p>
                </a>
            </li>
            <li class="nav-item {{ Route::is('users.index') ? 'active' : '' }}">
                <a href="{{ route('users.index') }}">
                    <i class="la la-table"></i>
                    <p class=" text-warning">User List</p>
                    <span class="badge badge-warning"></span>
                </a>
            </li>

        </ul>
    </div>
</div>
