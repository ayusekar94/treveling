<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LHomeController extends Controller
{
    //
    public function index()
    {
        return view('home', [
            "title" => "Home",
            "nama"=> "Wellcome To JaPar Group",
            "p1"=> "Situs jasa online yang melakukan tindakan menjual tiket masuk theme park Jawa Timur Park Group.",
            "sejarah"=>"Pembangunan tempat wisata ini dilatar belakangi keprihatinan Paul terhadap kurangnya tempat wisata 
                        di wilayah Kota Batu. Lokasi Kota Batu yang dikelilingi pegunungan dengan cuaca yang sejuk sangat 
                        cocok dijadikan destinasi wisata. Dari kondisi tersebut muncul ide untuk membuat tempat rekreasi 
                        di Kota Batu."
            ]);
    }
}
