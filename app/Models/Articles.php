<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    use HasFactory;
    public function type(){
        return $this->belongsTo(Type_article::class,"id_type_article" ,"id");
    }
    public function user(){
        return $this->belongsToMany(User::class,"utilisateur_article","id_utilisateur" ,"id_article"); 
    } 
        public function client(){
        return $this->belongsToMany(Client::class, "achat","id_article","id_client");
        }
}
    

