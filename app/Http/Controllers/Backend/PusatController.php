<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pusat;

class PusatController extends Controller
{
    public function PusatView(){
        $data['allDataPusat']=Pusat::all();
        return view('backend.pusat.view_pusat', $data);
    }
}
