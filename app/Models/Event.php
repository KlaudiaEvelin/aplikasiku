<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    protected $primaryKey = 'id_event';
    public $timestamps = false;

    protected $fillable = [
        'title',
        'description',
        'header_img',
        'start',
        'finish',
        'status'
    ];

    public function donations()
    {
    return $this->hasMany(Donation::class, 'id_event', 'id_event');
    }
}
