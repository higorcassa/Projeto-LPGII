<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExemptionsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('exemptions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('inscricao_id')->unsigned();            
            $table->foreign('inscricao_id')->references('id')->on('registrations');
            $table->text('motivo');
            $table->integer('homologado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('exemptions');
    }

}
