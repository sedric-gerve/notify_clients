<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory;
    public function types(){
        return $this->belongsTo(Type_article::class,"id_type_article","id");
    }
     public function article(){
        return $this->belongsToMany(Article::class,"achat","id_client","id_article");
        }
 }

