<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients_commandes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_commandes')->constrained('commandes')->cacadeOnDelete();
            $table->foreignId('id_clients')->constrained('clients')->cacadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients_commandes');
    }
}
