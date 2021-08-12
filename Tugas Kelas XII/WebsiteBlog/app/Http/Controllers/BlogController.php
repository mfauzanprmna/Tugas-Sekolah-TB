<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::latest()->paginate(10);
        return view('blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'image'     => 'required|image|mimes:png,jpg,jpeg',
            'title'     => 'required',
            'konten'   => 'required'
        ]);
    
        //upload image
        $image = $request->file('image');
        $image->storeAs('public/blogs', $image->hashName());
    
        $blog = Blog::create([
            'image'     => $image->hashName(),
            'title'     => $request->title,
            'content'   => $request->konten
        ]);
    
        if($blog){
            //redirect dengan pesan sukses
            return redirect()->route('blog.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('blog.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('blog.detail', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('blog.edit', compact('blog'));
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
        $this->validate($request, [
            'title'     => 'required',
            'konten'   => 'required'
        ]);
    
        //get data Blog by ID
        $blog = Blog::findOrFail($blog->id);
    
        if($request->file('image') == "") {
    
            $blog->update([
                'title'     => $request->title,
                'content'   => $request->konten
            ]);
    
        } else {
    
            //hapus old image
            Storage::disk('local')->delete('public/blogs/'.$blog->image);
    
            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/blogs', $image->hashName());
    
            $blog->update([
                'image'     => $image->hashName(),
                'title'     => $request->title,
                'konten'   => $request->content
            ]);
    
        }
    
        if($blog){
            //redirect dengan pesan sukses
            return redirect()->route('blog.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('blog.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog = Blog::findOrFail($blog->id);
        Storage::disk('local')->delete('public/blogs/'.$blog->image);
        $blog->delete();
      
        if($blog){
           //redirect dengan pesan sukses
           return redirect()->route('blog.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
          //redirect dengan pesan error
          return redirect()->route('blog.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $blogs = Blog::where('title', 'like', "%" . $keyword . "%")->paginate(5);
        return view('blog.index', compact('blogs'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
