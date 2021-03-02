<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prospectLog extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sequence_id',
        'prospect',
        'stage',
        'circle',
        'completed',
        'replied',
        'unsubscribed',
    ];

    protected $casts = [
        'prospect' => 'json',
    ];

    public function sequence() {
        return $this->belongsTo('App\Models\Sequence');
    }

}
