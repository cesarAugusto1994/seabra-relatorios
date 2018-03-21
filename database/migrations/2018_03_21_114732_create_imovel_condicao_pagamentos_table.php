<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImovelCondicaoPagamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imovel_condicoes_pagamento', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('imovel_id')->nullable();
            $table->float('preco_total', 12, 2)->nullable();
            $table->float('pagamento_recursos_proprios', 12, 2)->nullable();
            $table->float('pagamento_financiamento', 12, 2)->nullable();
            $table->integer('prazo_financiamento')->nullable();
            $table->string('correcao_monetaria')->nullable();
            $table->float('correcao_monetaria_valor', 12, 2)->nullable();
            $table->boolean('incidencia_juros')->default(true);
            $table->boolean('usa_fgts')->default(false);
            $table->float('fgts_valor', 12, 2)->nullable();
            $table->string('tipo_juros')->nullable();
            $table->text('descricao')->nullable();
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
        Schema::dropIfExists('imovel_condicoes_pagamento');
    }
}
