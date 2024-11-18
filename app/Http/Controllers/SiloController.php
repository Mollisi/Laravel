<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiloController extends Controller
{
    //
    
    public function Silo(){
        $data = 'Silo';
        return view ('Silo',['title'=>$data]);
     }
}
