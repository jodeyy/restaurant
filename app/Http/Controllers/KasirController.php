<?php

namespace App\Http\Controllers;

use App\Models\Kasir;
use Illuminate\Http\Request;

class KasirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kasir = Kasir::all(); //select *from fakultas
        return view('kasir.index')
            ->with('kasir',$kasir);    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('kasir.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->user()->cannot('create',Kasir::class)){
            abort(403);
        }
        $val = $request -> validate([
            'no_kasir' => "required|unique:kasirs",
            'nama' => "required",
            'no_telp' => "required",

        ]);
        Kasir::create($val);
        //redirect ke fakultas
        return redirect()->route('kasir.index')->with('success',$val['nama'].'berhasil disimpan');    }

    /**
     * Display the specified resource.
     */
    public function show(Kasir $kasir)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $kasir = Kasir::find($id);
        return view('kasir.edit')-> with('kasir',$kasir);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kasir $kasir)
    {
        if ($request->user()->cannot('create',Kasir::class)){
            abort(403);
        }
        $val = $request -> validate([
            'no_kasir' => "required|unique:kasirs",
            'nama' => "required",
            'no_telp' => "required",

        ]);
        Kasir::create($val);
        //redirect ke fakultas
        return redirect()->route('kasir.index')->with('success',$val['nama'].'berhasil disimpan');    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kasir $kasir)
    {
        $kasir->delete(); //hapus data mahasiswa
        return redirect() ->route('kasir.index')-> with('success','data berhasil dihapus');
        }
}
