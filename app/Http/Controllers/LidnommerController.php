<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LidnommerController extends Controller
{
    //
    public function Lidnommer(){
        $data = 'Lidnommer';
        return view ('Lidnommer',['title'=>$data]); //view should always be in small caps() 
     }
}
