<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public $timestamps = false;

    public $guarded = ['id'];

    public static $rules = [
        'name' => 'reruired',
        'mail' => 'dmail',
        'age' => 'integer|min0|max150'
    ];

    public function boards()
    {
        return $this->hasMany(Board::class);
    }
}
