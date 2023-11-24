<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function centres() {
        return view('Admin.admin')->with (['result'=>'Hola buenas administrador!']);
    }
    public function usuaris(Request $request) {
        $name = $request->input('send');
        return view('Admin.users')->with(['result'=> $name]);
    }
}
