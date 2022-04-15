<?php

namespace Database\Seeders;


use App\Models\User;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Articles;
use App\Models\Commande;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      
          //Contact::factory(10)->create();
         // User::factory(10)->create();
        // Articles::factory(10)->create();
         // Client::factory(10)->create();
         Commande::factory(15)->create();
          
      
    }
}
