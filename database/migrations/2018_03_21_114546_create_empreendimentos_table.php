<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpreendimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empreendimento', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pessoa_id')->nullable();
            $table->integer('proposta_id')->nullable();
            $table->string('endereco');
            $table->string('proprietario');
            $table->string('vendedor');
            $table->string('imovel');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado');
            $table->string('unidade');
            $table->string('bloco');
            $table->string('vagas');
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
        Schema::dropIfExists('empreendimento');
    }
}
