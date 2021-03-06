<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitarInformacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitar_informacoes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome')->nullable();
            $table->string('email')->nullable();
            $table->string('telefone')->nullable();
            $table->text('duvida')->nullable();
            $table->string('imovel')->nullable();
            $table->string('qtde_imoveis')->nullable();
            $table->string('url')->nullable();
            $table->integer('imovel_1')->nullable();
            $table->integer('imovel_2')->nullable();
            $table->integer('imovel_3')->nullable();
            $table->integer('imovel_4')->nullable();
            $table->integer('imovel_5')->nullable();
            $table->integer('imovel_6')->nullable();
            $table->string('formulario_origem')->nullable();
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
        Schema::dropIfExists('solicitar_informacoes');
    }
}
