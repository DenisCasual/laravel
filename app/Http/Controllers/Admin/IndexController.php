<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;

class IndexController extends Controller
{
    public function index() {
        return view('admin.index');
    }




}
