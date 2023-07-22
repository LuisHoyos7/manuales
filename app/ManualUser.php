<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManualUser extends Model
{
    protected $table = "manuals_user";

    protected $fillable = [
        'user_id',
        'manual_id'
    ];
}
