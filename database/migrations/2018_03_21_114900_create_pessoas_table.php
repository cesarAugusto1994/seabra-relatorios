<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('email');
            $table->string('tipo_pessoa')->nullable()->default('PF');
            $table->string('telefone');
            $table->string('celular');
            $table->string('imovel_situacao')->nullable();
            $table->integer('tipo_cadastro_id')->nullable();
            $table->string('tempo_aquisicao')->nullable();
            $table->string('tempo_aquisicao_anos')->nullable();
            $table->string('tempo_aquisicao_meses')->nullable();
            $table->string('cartorio_reconhecimento_firma')->nullable();
            $table->float('valor', 12, 2)->nullable();
            $table->boolean('ativo')->default(true);
            $table->integer('empregador_id')->nullable();
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
        Schema::dropIfExists('pessoas');
    }
}
