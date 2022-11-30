<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cim extends Model
{
    protected $table = 'cim';
    
    protected $primaryKey="cím_id";
    
    protected $fillable=[
        "irányítószám",
        "város",
        "közterület neve",
        "közterület jellege",
        "házszám",
        "épület",
        "emelet",
        "ajtó",
        "kapucsengő"
    ];
}
