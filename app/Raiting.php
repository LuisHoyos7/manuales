<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Raiting extends Model
{
    protected $table = "ratings";

    protected $fillable = [
        'user_id',
        'manual_id',
        'calification'
    ];
}
