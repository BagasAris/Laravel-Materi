<?php

namespace App\Http\Controllers;

use App\Models\Peran;
use App\Models\Cast;
use App\Models\Film;
use Illuminate\Http\Request;

class PeranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Peran $peran)
    {
        //
        $perans = Peran::all();
        return view('peran.index', compact('perans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $films = Film::all();
        $casts = Cast::all();
        return view('peran.create', compact('casts', 'films'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'   => 'required',
            'film_id' => 'required', 
            'cast_id' => 'required', 
        ], [
            'nama.required' => 'Nama harus diisi.',
            'film_id.required' => 'Film harus dipilih.',
            'cast_id.required' => 'Cast harus dipilih.',
        ]);        

        Peran::create([
            'nama'    => $request['nama'],
            'film_id' => $request['film'],
            'cast_id' => $request['cast'],
        ]);

        return redirect()->route('peran.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Peran $peran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Peran $peran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Peran $peran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peran $peran)
    {
        //
    }
}