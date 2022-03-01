<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_article extends Model
{
    use HasFactory;
    public function article(){
        return $this->hasMany(Articles::class);   
    }
    public function client(){
        return $this->hasMany(Client::class);   
    }
}
