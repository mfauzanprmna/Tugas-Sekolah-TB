<?php

namespace App\Http\Controllers;

use App\Models\SiswaModel;
use App\Models\Blog;
use Illuminate\Http\Request;

class SiswaController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SiswaModel  $siswaModel
     * @return \Illuminate\Http\Response
     */
    public function show(SiswaModel $siswaModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SiswaModel  $siswaModel
     * @return \Illuminate\Http\Response
     */
    public function edit(SiswaModel $siswaModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SiswaModel  $siswaModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SiswaModel $siswaModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SiswaModel  $siswaModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(SiswaModel $siswaModel)
    {
        //
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $blogs = Blog::where('title', 'content', "%" . $keyword . "%")->paginate(5);
        return view('blog.index', compact('blogs'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
