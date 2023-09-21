<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $genres = Genre::all();
        return view('genre.index', compact('genres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('genre.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama' => 'required|unique:genres,nama|min:3'
        ],[
            'nama.required' => 'nama wajib diisi, tidak boleh kosong ya cuy',
            'nama.unique' => 'nama sudah terdaftar, silahkan coba dengan nama lain',
            'nama.min' => 'nama minimal 3 huruf',
        ]);
        Genre::create($request->all());
        
        return redirect()->route('genre.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Genre $genre)
    {
        //
        return view('genre.show', compact('genre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genre $genre)
    {
        //
        return view('genre.edit', compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Genre $genre)
    {
        //
        $request->validate([
            'nama' => 'required|unique:genres,nama|min:3'
        ],[
            'nama.required' => 'nama wajib diisi, tidak boleh kosong ya cuy',
            'nama.unique' => 'nama sudah terdaftar, silahkan coba dengan nama lain',
            'nama.min' => 'nama minimal 3 huruf',
        ]);

        $genre->update($request->all());
        return redirect()->route('genre.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Genre $genre)
    {
        //
        $genre->delete();
        return redirect()->route('genre.index');
    }
}
