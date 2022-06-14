<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistributeurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distributeur', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();  
            $table->string('nom');
            $table->string('prenom');
            $table->text('adresse');
            $table->string('codePostal');
            $table->string('telephone');
            $table->mediumText('activite');
            $table->mediumText('produit');
            $table->string('sexe')->enum('Masculin','Féminin');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->tinyInteger('role_as')->default('0');
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
        Schema::dropIfExists('distributeur');
    }
}
