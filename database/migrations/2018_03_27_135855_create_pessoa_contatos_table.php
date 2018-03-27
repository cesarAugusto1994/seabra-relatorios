<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoaContatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoa_contato', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pessoa_id')->nullable();
            $table->string('endereco_correspondencia')->nullable();
            $table->string('telefone')->nullable();
            $table->boolean('receber_email')->default(true);
            $table->boolean('receber_carta')->default(true);
            $table->string('email')->nullable();
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
        Schema::dropIfExists('pessoa_contato');
    }
}
