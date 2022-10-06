<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Tags;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd(old('tags'));

        $data = [
            'categories' => Category::all(),
            'tags' => Tags::all(),
        ];
        return view('blog.form')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all())
        $blog = new Blog;

        // $blog->category_id = request('category_id');
        // $blog->save();
        // $truncate = implode(",",request('tags'));
        // print_r($truncate); exit;
        $blog->create([
            'category_id' => request('category'),
            'tags_id' => implode(",",request('tags')),
            'title' => request('title'),
            'slug' => str_replace(' ', '-',request('title')),
            'content' => request('content'),
            'author' => Auth::user()->id,
            'pic_id' => Auth::user()->id,
        ]);

        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
