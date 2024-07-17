<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Satuan;
use Illuminate\Http\Request;

class SatuanController extends Controller
{
    //show
    public function show(){
        $satuan = Satuan::find(1);
        return response(['satuan'=>$satuan], 200);
    }
}
