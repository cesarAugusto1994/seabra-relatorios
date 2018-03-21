<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoaParticipacoesSocietariasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoa_participacoes_societarias', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('pessoa_id')->nullable();

            $table->string('empresa')->nullable();
            $table->boolean('possui_participacao')->default(false);
            $table->string('cnpj')->nullable();
            $table->string('ramo_atividade')->nullable();
            $table->string('cidade')->nullable();
            $table->string('tempo_existencia')->nullable();
            $table->float('participacao_empresa', 12, 2)->nullable();
            $table->integer('numero_funcionario')->nullable();

            $table->float('capital_social', 12, 2)->nullable();
            $table->string('telefone')->nullable();
            $table->string('fax')->nullable();
            $table->string('contato')->nullable();

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
        Schema::dropIfExists('pessoa_participacoes_societarias');
    }
}
