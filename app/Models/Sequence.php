<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sequence extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'user_id',
        'prospect',
        'specified',
        'instance',
        'linear',
        'status',
        'activated',
        'iteration',
        'duplicate',
        'replied',
        'completed',
        'unsubscribed',
    ];

    protected $casts = [
        'specified' => 'json',
    ];

    public function user() {
        return $this->belongsTo('App\Models\user');
    }
     public function emailSequence() {
        return $this->hasMany('App\Models\EmailSequence');
    }

    public function taskSequence() {
        return $this->hasMany('App\Models\taskSequence');
    }
}
