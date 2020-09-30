<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index() {
        return view('admin.index');
    }

    public function test1() {
        return view('admin.addnews');
    }

    public function test2() {
        return view('admin.test2');
    }
}
