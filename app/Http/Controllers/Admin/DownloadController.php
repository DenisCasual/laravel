<?php

namespace App\Http\Controllers\admin;

use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DownloadController extends Controller
{
    public function test2() {

       // return response()->json(News::getNews())
        //    ->header('Content-Disposition', 'attachment; filename = "json.txt"')
         //   ->setEncodingOptions(JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

        //return response()->download('10.jpg');
        return view('admin.test2');
    }
}
