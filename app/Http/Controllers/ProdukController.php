<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
 /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
 public function index()
 {
  $produk = Produk::all();
  return view('produk.index', compact('produk'));
 }

 /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
 public function create()
 {
  return view('produk.create');
 }

 /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
 public function store(Request $request)
    {
    $produk               = new Produk;
    $produk->nama_produk  = $request->nama_produk;
    $produk->harga        = $request->harga;
    $produk->kategori     = $request->kategori;
    $produk->stok         = $request->stok;
    $produk->cover       = $request->cover;

    // upload image
    if ($request->hasFile('cover')) {
    $img  = $request->file('cover');
    $name = rand(1000, 9999) . $img->getClientOriginalName();
    $img->move('images/produk', $name);
    $produk->cover = $name;
    }

    $produk->save();
    return redirect()->route('produk.index')
    ->with('success', 'data berhasil ditambahkan');
 }

 /**
  * Display the specified resource.
  *
  * @param  int $id
  * @return \Illuminate\Http\Response
  */
 public function show($id)
 {
  $produk = Produk::findOrFail($id);
  return view('produk.show', compact('produk'));
 }

 /**
  * Show the form for editing the specified resource.
  *
  * @param  int $id
  * @return \Illuminate\Http\Response
  */
 public function edit($id)
 {
  $produk = Produk::findOrFail($id);
  return view('produk.edit', compact('produk'));
 }

 /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int $id
  * @return \Illuminate\Http\Response
  */
 public function update(Request $request, $id)
    {
    $produk               = Produk::findOrFail($id);
    $produk->nama_produk  = $request->nama_produk;
    $produk->harga        = $request->harga;
    $produk->kategori     = $request->kategori;
    $produk->stok         = $request->stok;
    $produk->cover       = $request->cover;

    // upload image
    if ($request->hasFile('cover')) {
    $img  = $request->file('cover');
    $name = rand(1000, 9999) . $img->getClientOriginalName();
    $img->move('images/produk', $name);
    $produk->cover = $name;
    }

    $produk->save();
    return redirect()->route('produk.index')
    ->with('success', 'Data Berhasil Terganti');
 }

 /**
  * Remove the specified resource from storage.
  *
  * @param  int $id
  * @return \Illuminate\Http\Response
  */
 public function destroy($id)
 {
  $produk = Produk::findOrFail($id);
  $produk->delete();
  return redirect()->route('produk.index')
   ->with('success', 'data terhapus :(');
 }
}
