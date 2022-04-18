<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class model1 extends Model
{
    public static function getNama()
    {
        return $nama = "Wellcome To JaPar Group";
    }
    public static function getP1()
    {
        return $p1 = "Situs jasa online yang melakukan tindakan menjual tiket masuk theme park Jawa Timur Park Group.";
    }
    public static function getSejarah()
    {
        return $sejarah = "Pembangunan tempat wisata ini dilatar belakangi keprihatinan Paul terhadap kurangnya tempat wisata 
        di wilayah Kota Batu. Lokasi Kota Batu yang dikelilingi pegunungan dengan cuaca yang sejuk sangat 
        cocok dijadikan destinasi wisata. Dari kondisi tersebut muncul ide untuk membuat tempat rekreasi 
        di Kota Batu.";
    }
}
