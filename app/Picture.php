<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    // belongsTo == clé étrangère
    public function book(){

        return $this->belongsTo(Book::class);
    }
}
