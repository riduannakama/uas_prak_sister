<?php

namespace App\Http\Controllers;

use App\Models\DataPembeli;
use Illuminate\Http\Request;

class DataPembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DataPembeli::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $pembeli = new DataPembeli();
        $pembeli -> nama = $request->nama;
        $pembeli -> TTL = $request->TTL;
        $pembeli -> alamat = $request->alamat;
        $pembeli -> JK = $request->JK;
        $pembeli -> umur = $request->umur;
        $pembeli -> telp = $request->telp;
        $pembeli -> save();

        return "Data Pembeli berhasil ditambahkan";

    }

    public function update(Request $request)
    {
        $id = $request->id;
        $nama = $request->nama;
        $TTL = $request->TTL;
        $alamat = $request->alamat;
        $JK = $request->JK;
        $umur = $request->umur;
        $telp = $request->telp;

        $pembeli = DataPembeli::find($id);
        $pembeli->nama = $nama;
        $pembeli->TTL = $TTL;
        $pembeli->alamat = $alamat;
        $pembeli->JK = $JK;
        $pembeli->umur = $umur;
        $pembeli->telp = $telp;
        $pembeli -> save();

        return "Data Pembeli berhasil diubah";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataPembeli  $dataPembeli
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $id = $request->id;
        $pembeli = DataPembeli::find($id);
        $pembeli->delete();

        return "Data Pembeli berhasil dihapus";
    }
}
