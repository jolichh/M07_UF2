<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignController extends Controller
{
    public function signin($dato1, $dato2, $dato3, $dato4) {
        $resultado = $dato1." ".$dato2." ".$dato3." ".$dato4;
        return view('viewSignin')->with('resultado',$resultado);
    }
    public function signup($dato1, $dato2, $dato3) {
        $resultado = $dato1." ".$dato2." ".$dato3;
        return view('viewSignup')->with('resultado',$resultado);
    }
}
