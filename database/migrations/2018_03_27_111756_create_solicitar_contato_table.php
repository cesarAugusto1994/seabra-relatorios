<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitarContatoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitar_contato', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome')->nullable();
            $table->string('email')->nullable();
            $table->string('telefone')->nullable();
            $table->string('periodo')->nullable();
            $table->text('mensagem')->nullable();
            $table->string('imovel')->nullable();
            $table->string('url')->nullable();
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
        Schema::dropIfExists('solicitar_contato');
    }
}
