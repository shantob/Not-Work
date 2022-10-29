<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(10);
        return view('backend.users.index', compact('users'));
    }

    public function show(User $user)
    {
        return view('backend.users.edit', compact('user'));
    }
    public function create()
    {
        return view('backend.users.create');
    }
}
