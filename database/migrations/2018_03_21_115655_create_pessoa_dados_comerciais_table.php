<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoaDadosComerciaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas_dados_comerciais', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pessoa_id')->nullable();
            $table->string('empregador')->nullable();
            $table->string('profissao')->nullable();
            $table->string('funcao')->nullable();
            $table->string('tempo_funcao_anos')->nullable();
            $table->string('tempo_funcao_meses')->nullable();
            $table->float('salario', 12, 2)->nullable();
            $table->string('tempo_trabalho')->nullable();
            $table->integer('vinculo_empregaticio_id')->nullable();
            $table->float('fonte_principal_renda', 12, 2)->nullable();
            $table->float('renda_mensal_comprovada', 12, 2)->nullable();
            $table->float('outras_rendas', 12, 2)->nullable();
            $table->string('outras_rendas_exemplo')->nullable();
            $table->string('cnpj')->nullable();
            $table->string('endereco')->nullable();
            $table->string('bairro')->nullable();
            $table->string('cep')->nullable();
            $table->string('cidade')->nullable();
            $table->string('estado')->nullable();
            $table->string('telefone')->nullable();
            $table->string('fax')->nullable();
            $table->datetime('data_admissao')->nullable();
            $table->string('empregador_anterior')->nullable();
            $table->string('renda_mensal_anterior')->nullable();
            $table->string('funcao_anterior')->nullable();
            $table->string('tempo_emprego_anterior')->nullable();
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
        Schema::dropIfExists('pessoas_dados_comerciais');
    }
}
