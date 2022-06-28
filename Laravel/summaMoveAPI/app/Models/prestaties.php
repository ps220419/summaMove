<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prestaties extends Model
{
    use HasFactory;

    protected $table = 'prestaties';

    public $fillable=[  //in this array you declare all of your table collumns.
        'datum',
        'startTijd',
        'eindTijd',
        'aantal',
        'oefeningen_Id',
        'user_Id'
    ];
}
