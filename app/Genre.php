<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    // One to Many 
    // 1 genre => obtenir tous ses livres
    public function books(){

        return $htis->hasMany(Book::class);
    }
}
