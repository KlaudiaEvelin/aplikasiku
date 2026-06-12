<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $table = 'donations';
    protected $primaryKey = 'id_donation';
    public $timestamps = false;

    protected $fillable = [
        'id_user',
        'id_event',
        'value',
        'tree_quantity',
        'date'
    ];
    public function user()
    {
    return $this->belongsTo(User::class, 'id_user', 'id_user');
    }

    public function event()
    {
    return $this->belongsTo(Event::class, 'id_event', 'id_event');
    }
}
