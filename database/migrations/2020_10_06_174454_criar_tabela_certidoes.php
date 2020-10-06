<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaCertidoes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Certidoes', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_certidao');
            $table->string('envolvido1');
            $table->string('envolvido2');
            $table->string('data_certidao');
            $table->string('tabeliao');
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
        Schema::dropIfExists('Certidoes');
    }
}
