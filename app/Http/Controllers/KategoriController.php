<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = Kategori::all(); //select *from fakultas
        return view('kategori.index')
            ->with('kategori',$kategori);    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->user()->cannot('create',Kategori::class)){
            abort(403);
        }
        // dd($request);
        //validasi form
        $val = $request -> validate([
            'nama_kategori' => "required|unique:kategoris",
        ]);
        //simpan ke tabel fakultas
        Kategori::create($val);
        //redirect ke fakultas
        return redirect()->route('kategori.index')->with('success',$val['nama_kategori'].'berhasil disimpan');

    }

    /**
     * Display the specified resource.
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kategori $kategori)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kategori $kategori)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategori $kategori)
    {
        $kategori->delete(); //hapus data mahasiswa
        return redirect() ->route('kategori.index')-> with('success','data berhasil dihapus');
    }
}
