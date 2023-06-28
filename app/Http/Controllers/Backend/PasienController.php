<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pasien;

class PasienController extends Controller
{
    public function PasienView(){
        $data['allDataPasien']=Pasien::all();
        return view('backend.pasien.view_pasien', $data);
    }
}
