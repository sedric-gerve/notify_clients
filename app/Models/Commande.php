<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    protected $fillable = [
        'article_commander',
        'ModeDePaiement',
        'prix',
        'email'
        ];
        public function client(){
            return $this->belongsToMany(Client::class,"clients_commandes" ,"id_commandes", "id_clients");
        }

}
