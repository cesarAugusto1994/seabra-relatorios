<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImovelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imoveis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo_imovel')->nullable();
            $table->string('tipo_pretensao')->nullable();
            $table->string('endereco')->nullable();
            $table->string('bairro')->nullable();
            $table->string('cep')->nullable();
            $table->string('cidade')->nullable();
            $table->string('estado')->nullable();
            $table->string('unidade')->nullable();
            $table->string('bloco')->nullable();
            $table->string('area_privada')->nullable();
            $table->string('dormitorios')->nullable();
            $table->string('vagas')->nullable();
            $table->boolean('quitado')->default(false);
            $table->float('valor_prestacao', 12, 2)->nullable();
            $table->float('valor_estimado', 12, 2)->nullable();
            $table->integer('prazo_restante')->nullable();
            $table->float('preco_venda', 12, 2)->nullable();
            $table->float('preco_aluguel', 12, 2)->nullable();
            $table->float('faixa_preco', 12, 2)->nullable();
            $table->float('valor_entrada', 12, 2)->nullable();
            $table->float('valor_financiar', 12, 2)->nullable();
            $table->integer('prazo_financiamento')->nullable();
            $table->boolean('usa_fgts')->default(false);
            $table->float('valor_fgts', 12, 2)->nullable();
            $table->float('condominio', 12, 2)->nullable();
            $table->float('iptu', 12, 2)->nullable();
            $table->text('descricao')->nullable();
            $table->text('observacoes')->nullable();
            $table->boolean('ativo')->default(true);
            $table->datetime('criado_em');
            $table->datetime('atualizado_em')->nullable();
            $table->datetime('inativado_em')->nullable();
            $table->integer('pessoa_id')->nullable();
            $table->integer('proposta_id')->nullable();
            $table->string('empreendimento')->nullable();
            $table->string('vendedor')->nullable();
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
        Schema::dropIfExists('imoveis');
    }
}
