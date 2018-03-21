<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoaEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas_enderecos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pessoa_id')->nullable();
            $table->string('logradouro');
            $table->string('bairro');
            $table->string('cep');
            $table->string('cidade');
            $table->string('estado')->nullable();
            $table->boolean('ativo')->default(true);
            $table->datetime('criado_em');
            $table->datetime('atualizado_em')->nullable();
            $table->datetime('inativado_em')->nullable();
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
        Schema::dropIfExists('pessoas_enderecos');
    }
}
