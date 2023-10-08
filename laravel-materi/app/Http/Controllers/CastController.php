<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cast;

class CastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $casts = Cast::all();
        return view('cast.index', compact('casts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cast.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'nama' => 'required|unique:casts,nama|min:3',
            'umur' => 'required|numeric',
            'bio' => 'required|min:10'
        ],[
                'nama.required' => 'nama wajib diisi, tidak boleh kosong ya cuy',
                'nama.unique' => 'nama sudah terdaftar, silahkan coba dengan nama lain',
                'nama.min' => 'nama minimal 3 huruf',
                'umur.required' => 'umur wajib diisi',
                'bio.required' => 'bio wajib diisi',
                'bio.min' => 'bio minimal 10 huruf',
        ]);
        Cast::create($request->all());

        return redirect()->route('cast.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cast $cast)
    {
        //
        return view('cast.show', compact('cast'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cast $cast)
    {
        //
        return view('cast.edit', compact('cast'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cast $cast)
    {
        //
        $request->validate([
            'nama' => 'required|unique:casts,nama|min:3',
            'umur' => 'required|numeric',
            'bio' => 'required|min:10'
        ],[
                'nama.required' => 'nama wajib diisi, tidak boleh kosong ya cuy',
                'nama.unique' => 'nama sudah terdaftar, silahkan coba dengan nama lain',
                'nama.min' => 'nama minimal 3 huruf',
                'umur.required' => 'umur wajib diisi',
                'bio.required' => 'bio wajib diisi',
                'bio.min' => 'bio minimal 10 huruf',
        ]);
        $cast->update($request->all());
        return redirect()->route('cast.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cast $cast)
    {
        //
        $cast->delete();
        return redirect()->route('cast.index');
    }
}
