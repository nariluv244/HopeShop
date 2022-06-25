<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('barang')->get();
        return view('admin.barang.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.barang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('foto');
        $filename = time() . Str::slug($request->NamaBarang) . '.' . $file->getClientOriginalExtension();
        $file->move('public/barang', $filename);
    
                
        
              $barang = new Barang();
              $barang->NamaBarang = $request->NamaBarang;
              $barang->HargaBarang = $request->HargaBarang;
              $barang->StokBarang = $request->StokBarang;
              $barang->JenisBarang = $request->JenisBarang;
              $barang->foto = $filename;
              $barang->save();
              return redirect('/barang/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('barang as b')
        ->select('b.*')
        ->where('b.idBarang', $id)
        ->first();
        return view('admin.barang.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $file = $request->file('foto');
        $filename = time() . Str::slug($request->NamaBarang) . '.' . $file->getClientOriginalExtension();
        $file->move('public/barang', $filename);
    
        $barang = Barang::find($id);
        $barang->NamaBarang = $request->NamaBarang;
        $barang->HargaBarang = $request->HargaBarang;
        $barang->StokBarang = $request->StokBarang;
        $barang->JenisBarang = $request->JenisBarang;
        $barang->foto = $filename;
        $barang->save();
        return redirect()->route('barang.index')
        ->with('sukses','Company Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Barang::where('idBarang',$id)->delete();
        return Redirect()->back();
    }
}
