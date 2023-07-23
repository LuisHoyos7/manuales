<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comments";

    protected $fillable = [
        'user_id',
        'manual_id',
        'description'
    ];

    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }
}
