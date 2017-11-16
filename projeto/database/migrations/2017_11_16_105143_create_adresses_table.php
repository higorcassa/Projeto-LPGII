<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adresses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pessoa_id')->unsigned();
            $table->foreign('pessoa_id')->references('id')->on('profiles');
            $table->string('rua', 200);
            $table->integer('numero');
			$table->integer('CEP');
            $table->string('bairro', 100);
            $table->string('complemento', 500)->nullable();
            $table->string('tipo', 45)->nullable();
			$table->string('cidade', 45)->nullable();
			$table->string('estado', 45)->nullable();
			$table->string('pais', 45)->nullable();
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
        Schema::dropIfExists('adresses');
    }
}
