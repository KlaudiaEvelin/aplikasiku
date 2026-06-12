<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tree extends Model
{
    Public static function getAvailableTrees()
    {
        return [
            ['name'=>'Mangrove', 'price'=>50000],
            ['name'=>'Trembesi', 'price'=>75000],
            ['name'=>'Cendana', 'price'=>100000],
        ];
    }
}