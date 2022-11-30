<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rendeles extends Model
{
    protected $table = 'rendeles';
    protected $primaryKey="rendelés_szám";

    protected $fillable=[
        "dátum",
        "felhasználó_id",
        "végösszeg",
        "kedvezmény",
        "kedvezményes_ár",
        "állapot",
    ];
}
