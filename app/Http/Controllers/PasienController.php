<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pasien = Pasien::orderBy('nama')->paginate(7);
        return view('index', ['pasien' => $pasien]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form-tambah-data');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'alamat' => 'required'
        ]);
        
        Pasien::create($validateData);
        return redirect('/')->with('message', "berhasil menambahkan data $request->nama");
    }

    /**
     * Display the specified resource.
     */
    public function show(Pasien $pasien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pasien $pasien)
    {
        return view('form-edit-data', ['pasien' => $pasien]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pasien $pasien)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'alamat' => 'required'
        ]);
        
        $pasien->update($validateData);
        return redirect('/')->with('message', "berhasil mengubah data $request->nama");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pasien $pasien)
    {
        $pasien->delete();
        return redirect('/')->with('message', "berhasil menghapus data $pasien->nama");
    }
}
