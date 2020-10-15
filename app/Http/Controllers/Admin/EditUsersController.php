<?php

namespace App\Http\Controllers\Admin;

use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Support\Facades\DB;
class EditUsersController extends Controller
{
    public function edit()
    {
        $users = User::query()->paginate(3);



        return view('admin.edit')->with('users', $users);
    }
}
