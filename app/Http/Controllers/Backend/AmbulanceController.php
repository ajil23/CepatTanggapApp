<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ambulance;

class AmbulanceController extends Controller
{
    public function AmbulanceView(){
        $data['allDataAmbulance']=Ambulance::all();
        return view('backend.ambulance.view_ambulance', $data);
    }
}
