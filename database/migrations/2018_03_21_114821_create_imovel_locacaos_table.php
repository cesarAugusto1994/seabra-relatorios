<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImovelLocacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imovel_locacao', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo_locacao')->nullable();
            $table->integer('imovel_id')->nullable();
            $table->float('valor_aluguel', 12, 2)->nullable();
            $table->string('inicio_vigencia')->nullable();
            $table->string('prazo_contrato')->nullable();
            $table->string('indice_correcao')->nullable();
            $table->string('garantias')->nullable();
            $table->string('nome_fiador')->nullable();
            $table->string('grau_parentesco')->nullable();
            $table->text('imoveis_fiador')->nullable();
            $table->text('observacoes')->nullable();
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
        Schema::dropIfExists('imovel_locacao');
    }
}
