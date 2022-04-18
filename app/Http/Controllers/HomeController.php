<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\model1;
use App\Models\Jumbo;
use App\Models\Sejarah;
use App\Models\Footer;
use App\Models\Photo;

class HomeController extends Controller
{
    //
    public function index(){
        return view('frontend.home', [
            "title" => "Home",
            'jumbo' => Jumbo::first(),
            'about' => Sejarah::first(),
            'footer' => Footer::first(),
            'img' => Photo::all()
        ]);
        
        // return view('fronand.home', [
        //     "title" => "Home",
        //     "nama"=> model1 :: getNama(),
        //     "p1"=> model1 :: getP1(),
        //     "sejarah"=>model1::getSejarah()
        // ]);
    }
    // public function login()
    // {
    //     return view('login', [
    //         "title" => "Login"
            
    //     ]);
    // }
    // public function admin()
    // {
    //     return view('admin', [
    //         "title" => "Admin"
    //     ]);
    // }
    // public function register()
    // {
    //     return view('register', [
    //         "title" => "Register"
    //     ]);
    // }
}
