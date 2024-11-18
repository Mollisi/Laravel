<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\Models\Plaaslaai;

class PlaaslaaiController extends Controller
{
    public function Farmloads(){
        $data = 'FarmLoads';
        // $data = Plaaslaai::all();

        return view ('Plaaslaai',['title'=>$data]);
     }
}
