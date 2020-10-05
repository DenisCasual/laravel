<?php

namespace App\Http\Controllers\admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function create(Request $request) {

        if ($request->isMethod('post')) {

            $arr = $request->all();


            \File::put(storage_path() . '\news.json' , json_encode($arr, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

            $request->flash();

            return redirect()->route('admin.create');
        }



        return view('admin.create', [
            'categories' => Category::getCategories()
        ]);
    }
}
