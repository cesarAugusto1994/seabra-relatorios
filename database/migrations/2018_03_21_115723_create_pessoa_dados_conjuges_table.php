<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoaDadosConjugesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas_dados_conjuge', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pessoa_id')->nullable();
            $table->string('nome');
            $table->string('email')->nullable();
            $table->datetime('nascimento')->nullable();
            $table->string('sexo')->nullable();
            $table->string('residencial')->nullable();
            $table->string('complemento')->nullable();
            $table->string('bairro')->nullable();
            $table->string('cidade')->nullable();
            $table->string('estado')->nullable();
            $table->string('cep')->nullable();
            $table->string('estado_civil')->nullable();
            $table->string('regime_casamento')->nullable();
            $table->string('nacionalidade')->nullable();
            $table->string('rg')->nullable();
            $table->string('cpf')->nullable();
            $table->string('empresa')->nullable();
            $table->string('profissao')->nullable();
            $table->string('funcao')->nullable();
            $table->float('salario', 12, 2)->nullable();
            $table->string('endereco_empresa')->nullable();
            $table->string('telefone_comercial')->nullable();
            $table->string('tempo_trabalho')->nullable();
            $table->string('cartorio_reconhecimento_firma')->nullable();
            $table->string('telefone')->nullable();
            $table->string('celular')->nullable();
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
        Schema::dropIfExists('pessoas_dados_conjuge');
    }
}
