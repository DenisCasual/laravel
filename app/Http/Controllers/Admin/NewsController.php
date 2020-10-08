<?php

namespace App\Http\Controllers\Admin;


use App\Category;
use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;
use DB;

class NewsController extends Controller
{

    public function index() {

        //$news = News::all();
        $news = News::query()->paginate(3);
        return view('admin.index')->with('news', $news);
    }

    public function destroy(News $news) {
        $news->delete();
        return redirect()->route('admin.index')->with('success', 'Новость успешно удалена');
    }

    public function edit(News $news) {
        return view('admin.create', [
            'news' => $news,
            'categories' => Category::all()
        ]);
    }

    public function update(Request $request, News $news) {
        $url = null;
        // dd($request->image);
        if ($request->file('image')) {
            $path = Storage::putFile('public', $request->file('image'));
            $url = Storage::url($path);

        }

        $news->image = $url;
        $news->fill($request->except('image'))->save();



        return redirect()->route('news.show', $news->id)->with('success', 'Новость изменена!');
    }

    public function create(Request $request) {

        if ($request->isMethod('post')) {

            $url = null;
           // dd($request->image);
            if ($request->file('image')) {
                $path = Storage::putFile('public', $request->file('image'));
                $url = Storage::url($path);

            }

            $news = new News();
            $news->image = $url;
            $news->fill($request->except('image'))->save();



            return redirect()->route('news.show', $news->id)->with('success', 'Новость добавлена!');
        }



        return view('admin.create', [
            'categories' => Category::all(),
            'news' => new News()
        ]);
    }
}
