<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Friends extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user_friend()
    {
        return $this->belongsTo(User::class,'friend_id');
    }

    public function me()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
