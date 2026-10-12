<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public static function getAll()
    {
        return [
            (object)['name' => '雄希', 'age' => 10],
            (object)['name' => 'Alice', 'age' => 20],
            (object)['name' => 'Bob',   'age' => 25],
        ];
    }
}
