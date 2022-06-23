<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class oefeningen extends Model
{
    use HasFactory;

    protected $table = 'oefeningen';

    public $fillable=[  //in this array you declare all of your table collumns.
        'naamNL',
        'naamEN',
        'omschrijvingNL',
        'omschrijvingEN',
        'img'
    ];

    public function prestatiesOefeningen(){

        return $this->hasOne(prestaties::class, 'oefening_Id', 'id');
    }
}
