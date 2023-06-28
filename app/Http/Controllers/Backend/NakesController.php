<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nakes;

class NakesController extends Controller
{
    public function NakesView(){
        $data['allDataNakes']=Nakes::all();
        return view('backend.nakes.view_nakes', $data);
    }
}
