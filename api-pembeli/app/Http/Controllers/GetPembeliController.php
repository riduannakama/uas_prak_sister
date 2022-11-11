<?php

namespace App\Http\Controllers;

use App\Models\DataPembeli;
use App\Models\DataRumah;
use Illuminate\Http\Request;

class GetPembeliController extends Controller
{
    public function GetPembeli(Request $request){
        $id = $request->id;

        return DataPembeli::find($id);
    }
}