<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    protected $fillable = ['person_id', 'title', 'message'];

    public function getData()
    {
        return $this->id . ": " . $this->title;
    }

    public function person()
    {
        return $this->belongsTo(Person::class);
    }
}

