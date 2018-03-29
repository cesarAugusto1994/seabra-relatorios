<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitacaoInformacoesImovelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitacao_informacoes_imovel', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome')->nullable();
            $table->string('email')->nullable();
            $table->string('telefone')->nullable();
            $table->text('mensagem')->nullable();
            $table->string('imovel')->nullable();
            $table->string('imovel_nome')->nullable();
            $table->string('url')->nullable();
            $table->string('formulario_origem')->nullable();
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
        Schema::dropIfExists('solicitacao_informacoes_imovel');
    }
}
