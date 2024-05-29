<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Posts::all();
        return view('tpmtiga.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tpmtiga.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'konten' => 'required'
        ]);

        Posts::create($validator);
        return redirect('post')->with('succes', 'Data Berhasil Disimpan');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Posts::find($id);
        return view('tpmtiga.edit', compact('data'));
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = $request->validate([
            'konten' => 'required'
        ]);
        
        Posts::find($id)->update($validator);
        return redirect('post')->with('succes', 'Data Berhasil Disimpan');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Posts::find($id);
        $post->delete();
        return redirect('post')->with('success', 'Post deleted successfully');
    }
}
