<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menu = Menu::all();
        return view('menu.index')
            ->with('menu',$menu);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('menu.create')-> with('kategori',$kategori);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->user()->cannot('create',Menu::class)){
            abort(403);
        }
        // dd($request);
        //validasi form
        $val = $request -> validate([
            'kategori_id' => "required",
            'nomor_menu' => "required|unique:menus",
            'url_menu' => "required|url",
            'nama_menu' => "required",
            'harga_menu' => "required",
        ]);
        //ekstensi file yang di upload
        // $ext = $request->url_menu->getClientOriginalExtension();
        // // $ext = $request->url_minuman->getClientOriginalExtension();
        // // //rename misal :npm.extensi 2226240145.png
        // $val['url_menu']= $request->nama_menu.".".$ext;
        // // $val['url_minuman']= $request->nama_minuman.".".$ext;
        // // //upload ke dalam folder public/foto
        // $request->url_menu->move('fotomenu/', $val['url_menu']);
        // $request->url_minuman->move('fotominuman/', $val['url_minuman']);
        //simpan ke tabel fakultas
        
        Menu::create($val);
        //redirect ke fakultas
        return redirect()->route('menu.index')->with('success',$val['nama_menu'].'berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $menu = Menu::find($id);
        $kategori = Kategori::all();
        return view('menu.edit')->with('kategori',$kategori)->with('menu',$menu);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Menu $menu)
    {
        if ($request->user()->cannot('create',Menu::class)){
            abort(403);
        }
        $val = $request->validate([
            'kategori_id' => "required",
            'nomor_menu' => "required|unique:menus",
            'url_menu' => "required|url",
            'nama_menu' => "required",
            'harga_menu' => "required",
        ]);
        $menu = Menu::find($val);
        Menu::where('id', $menu['id'])->update($val);
        return redirect()->route('menu.index')->with('success',$val['nama_menu'].' Berhasil di Edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        // dd($mahasiswa);
        // $menu = Menu::find($menu);
        // File::delete('fotomakanan/'. $menu['url_makanan']);
        // File::delete('fotominuman/'. $menu['url_minuman']);
        $menu->delete(); //hapus data mahasiswa
        return redirect() ->route('menu.index')-> with('success','data berhasil dihapus');    }
}
