<?php

namespace App\Models;

use App\Models\Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'sujet',
        'message',
        'email',
    ];
    public function client(){
        return $this->belongTo(Client::class);
    }
}
