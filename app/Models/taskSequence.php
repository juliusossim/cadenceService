<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class taskSequence extends Model
{
    use HasFactory;
    protected $fillable = [
        'task_id',
        'conditions',
        'settings',
    ];

    protected $casts = [
        'settings' => 'json',
        'conditions' => 'json',
    ];

    public function sequence() {
        return $this->belongsTo('App\Models\Sequence');
    }
    public function settings() {
        return $this->belongsTo('App\Models\Settings');
    }
}
