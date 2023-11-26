<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function centres() {
        $centres = array(
            1 => array(
                "name"=>"Institut TIC de Barcelona",
                "address"=>"c/ Sancho Ávila, 133",
                "cp"=> "08018",
                "city"=>"Barcelona"
            ),
            2 => array(
                "name"=>"Jaume Balmes",
                "address"=>"c/ diputacio, 12",
                "cp"=> "08020",
                "city"=>"Barcelona"
            )
        );
        return view('Admin.centres')->with(['centres'=>$centres]);
    }
    public function usuaris(Request $request) {
        $name = $request->input('send');
        $email = $request->input('email');
        $password = $request->input('password');

        $email_v = 'prueba@prueba.com';
        $password_v = 'prueba@123';
        if (($email_v == $email) && ($password_v == $password)) {
            return view('Admin.admin')->with(['result'=> $email]);
        }
        return view('viewSignin');
    }
    public function professorat() {
        $profes = array(
            "John" => array(
                "id"=> 1,
                "surname"=>"Doe",
                "Rol"=>"Professor",
                "email"=>"john@john.com"
            ),
            "Thomas" => array(
                "id"=> 2,
                "surname"=>"Sanchez",
                "Rol"=>"Professor",
                "email"=>"thomas@thomas.com"
            ),
            "Paula" => array(
                "id"=> 3,
                "surname"=>"Cruz",
                "Rol"=>"Professora",
                "email"=>"paula@paula.com"
            ),
            "Rocio" => array(
                "id"=> 4,
                "surname"=>"Martinez",
                "Rol"=>"Professora",
                "email"=>"rocio@rocio.com"
            )            
        );
        return view('Admin.professorat')->with(['profes'=>$profes]);
    }
    public function alumnat() {
        $alumnes = array(
            "Peter" => array(
                "id"=> 1,
                "surname"=>"Doe",
                "Rol"=>"Alumne",
                "email"=>"peter@peter.com"
            ),
            "David" => array(
                "id"=> 2,
                "surname"=>"Gomez",
                "Rol"=>"Alumne",
                "email"=>"david@david.com"
            ),
            "Sara" => array(
                "id"=> 3,
                "surname"=>"Lopez",
                "Rol"=>"Alumne",
                "email"=>"sara@sara.com"
            ),
            "Sofia" => array(
                "id"=> 4,
                "surname"=>"Martinez",
                "Rol"=>"Alumne",
                "email"=>"sofia@sofia.com"
            )            
        );
        return view('Admin.alumnat')->with(['alumnes'=>$alumnes]);
    }
    public function admin() {
        return view('Admin.admin');
    }
}
