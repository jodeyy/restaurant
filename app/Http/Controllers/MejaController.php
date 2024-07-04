<?php

namespace App\Http\Controllers;

use App\Models\Meja;
use Illuminate\Http\Request;

class MejaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mejas = Meja::all();
        return view('meja.index')
            ->with('meja',$mejas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('meja.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->user()->cannot('create',Meja::class)){
            abort(403);
        }
        $val = $request -> validate([
            'nomor_meja' => "required|unique:mejas",
            'kuantitas_kursi' => "required",
            'jenis_meja' => "required",
            'status_meja' => "required",
            
            // 'url_makanan' => "required|file|mimes:png,jpg,jpeg|max:5000",
            // 'url_minuman' => "required|file|mimes:png,   ,jpeg|max:5000"
        ]);
        Meja::create($val);
        //redirect ke fakultas
        return redirect()->route('meja.index')->with('success',$val['nomor_meja'].'berhasil disimpan');
   }

    /**
     * Display the specified resource.
     */
    public function show(Meja $meja)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $meja = meja::find($id);
        return view('meja.edit', compact('meja'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Meja $meja)
    {
        if ($request->user()->cannot('create',Meja::class)){
            abort(403);
        }
        $val = $request -> validate([
            'nomor_meja' => "required|unique:mejas",
            'kuantitas_kursi' => "required",
            'jenis_meja' => "required",
            'status_meja' => "required",
            
            // 'url_makanan' => "required|file|mimes:png,jpg,jpeg|max:5000",
            // 'url_minuman' => "required|file|mimes:png,   ,jpeg|max:5000"
        ]);
        Meja::create($val);
        //redirect ke fakultas
        return redirect()->route('meja.index')->with('success',$val['nomor_meja'].'berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Meja $meja)
    {
        $meja->delete(); //hapus data mahasiswa
        return redirect() ->route('meja.index')-> with('success','data berhasil dihapus');     }
}
