<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tree extends Model
{
    protected $table = 'trees';
    protected $primaryKey = 'id_tree';
    public $timestamps = false;

    protected $fillable = [
        'name',
        'tree_img',
        'price'
    ];
}
