<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailSequence extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'template_id',
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

}