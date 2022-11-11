<?php

namespace App\Http\Controllers;

use App\Models\DataRumah;
use Illuminate\Http\Request;

class GetIdController extends Controller
{
    public function GetId(Request $request){
        $id = $request->id;

        return DataRumah::find($id);
    }
}