<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('registrations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('processo_seletivo_id')->unsigned();
            $table->foreign('processo_seletivo_id')->references('id')->on('selections');
            $table->integer('usuario_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('users');
            $table->integer('cotas_id')->unsigned();
            $table->foreign('cotas_id')->references('id')->on('quotas');
            $table->integer('primeira_opcao_id')->unsigned();
            $table->foreign('primeira_opcao_id')->references('id')->on('courses');
            $table->integer('segunda_opcao_id')->unsigned();
            $table->foreign('segunda_opcao_id')->references('id')->on('courses');
            $table->date('data_pagamento')->nullable();
            $table->integer('pago')->nullable();
            $table->date('data_inscricao');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('registrations');
    }

}
