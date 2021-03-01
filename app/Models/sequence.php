<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sequence extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'user_id',
        'candidate',
        'specified',
        'linear',
        'status',
        'activated',
        'iteration',
        'duplicate',
        'replied',
        'completed',
        'unsubscribed',
    ];

//    public function user() {
//        return $this->belongsTo('App\Models\user');
//    }
     public function emailSequence() {
        return $this->hasMany('App\Models\emailSequence');
    }

    public function taskSequence() {
        return $this->hasMany('App\Models\taskSequence');
    }
}
