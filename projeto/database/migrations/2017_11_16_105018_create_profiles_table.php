<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 200);
            $table->date('data_nascimento');
            $table->string('CPF', 15);
            $table->string('RG', 15);
            $table->string('genero', 45);
            $table->string('nome_pai', 200)->nullable();
            $table->string('nome_mae', 200);
            $table->string('passaporte', 200)->nullable();
            $table->string('telefone', 200)->nullable();
            $table->string('celular', 200)->nullable();
            $table->string('nacionalidade', 200);
            $table->string('escolaridade', 200)->nullable();
            $table->string('emissor_RG', 200)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('profiles');
    }

}
