<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barangs;
use Illuminate\Support\Facades\DB;


class produkController extends Controller
{
    public function index3() {
        $produk = DB::table('barangs')->get();
        return view('produk/index', ['produk' => $produk]);
    }

    public function index2()
    {
        $produk = 'Aqua 400ML';
        return view('produk', ['produk' => $produk]);
    }

    public function show2()
    {
        $produk = ['Aqua 115 ML', 'Minuman Bersoda', 'Buku Sejarah', 'Mouse', 'CPU'];
        return view('show', ['produk' => $produk]);
    }

    public function show_eloquent() {
        $produk = DB::table('barangs')->get();
        return view('produk/index', ['produk' => $produk]);
    }

    public function insert_eloquent() {
        barangs::create(['nama' => 'Bahan Bangunan', 'harga_beli' => 1000,]);
    }

    public function update_eloquent() {
        barangs::where('id', 3)->update(['harga_beli' => '500']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = barangs::all();
        return view('produk', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        barangs::create([
            'nama' => $request->nama,
            'id_kategori' => $request->id_kategori,
            'qty' => $request->qty,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual
        ]);
        return redirect()->route('produk.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(barangs $produk)
    {
        return view('edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, barangs $produk)
    {
        $produk->update([
            'nama' => $request->nama,
            'id_kategori' => $request->id_kategori,
            'qty' => $request->qty,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual
        ]);
        return redirect()->route('produk.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(barangs $produk)
    {
        $produk->delete();
        //redirect to index
        return redirect()->route('produk.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
