<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoaDadosFinanceirosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas_dados_financeiros', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('pessoa_id')->nullable();

            $table->integer('dependentes_nenhum')->nullable();
            $table->integer('dependentes_ate_5')->nullable();
            $table->integer('dependentes_5_a_18')->nullable();
            $table->integer('dependentes_19_a_25')->nullable();
            $table->integer('dependentes_26_a_60')->nullable();
            $table->integer('dependentes_mais_de_60')->nullable();

            $table->float('educacao', 12, 2)->nullable();
            $table->float('alimentacao', 12, 2)->nullable();
            $table->float('aluguel', 12, 2)->nullable();
            $table->float('seguros', 12, 2)->nullable();
            $table->float('plano_saude', 12, 2)->nullable();
            $table->float('previdencia_privada', 12, 2)->nullable();
            $table->float('pensao_alimenticia', 12, 2)->nullable();
            $table->float('combustivel', 12, 2)->nullable();
            $table->float('outros', 12, 2)->nullable();

            $table->boolean('banco_brasil')->default(false);
            $table->boolean('bradesco')->default(false);
            $table->boolean('santander')->default(false);
            $table->boolean('hsbc')->default(false);
            $table->boolean('caixa_economica_federal')->default(false);
            $table->boolean('itau')->default(false);
            $table->boolean('banco_estrangeiro')->default(false);
            $table->boolean('banco_publico')->default(false);
            $table->boolean('banco_privado_nacional')->default(false);

            $table->string('pussui_conta_desde')->nullable();
            $table->string('cheques')->nullable();
            $table->string('cartao_credito')->nullable();
            $table->string('cartao_credito_origem')->nullable();

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
        Schema::dropIfExists('pessoas_dados_financeiros');
    }
}
