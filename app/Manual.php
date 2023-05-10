<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manual extends Model
{
    protected $fillable = [
        'name',
        'description',
        'category_id',
        'subcategory_id',
        'qualification',
        'state',
        'user_id',
        'observation',
    ];
}
