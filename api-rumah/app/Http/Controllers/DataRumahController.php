<?php

namespace App\Http\Controllers;

use App\Models\DataRumah;
use Illuminate\Http\Request;

class DataRumahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DataRumah::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $rumah = new DataRumah();
        $rumah -> alamat = $request->alamat;
        $rumah -> jumlahKT = $request->jumlahKT;
        $rumah -> jumlahKM = $request->jumlahKM;
        $rumah -> harga = $request->harga;
        $rumah -> save();

        return "Data Rumah berhasil ditambahkan";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataRumah  $dataRumah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
        $alamat = $request->alamat;
        $jumlahKT = $request->jumlahKT;
        $jumlahKM = $request->jumlahKM;
        $harga = $request->harga;

        $rumah = DataRumah::find($id);
        $rumah->alamat = $alamat;
        $rumah->jumlahKT = $jumlahKT;
        $rumah->jumlahKM = $jumlahKM;
        $rumah->harga = $harga;
        $rumah -> save();

        return "Data Rumah berhasil diubah";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataRumah  $dataRumah
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $id = $request->id;
        $rumah = DataRumah::find($id);
        $rumah->delete();

        return "Data Rumah berhasil dihapus";
    }
}
