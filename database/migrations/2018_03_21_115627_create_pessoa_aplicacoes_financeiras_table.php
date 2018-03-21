<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoaAplicacoesFinanceirasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas_aplicacoes_financeiras', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pessoa_id')->nullable();
            $table->float('poupanca', 12, 2)->nullable();
            $table->float('aplicacoes', 12, 2)->nullable();
            $table->float('outras', 12, 2)->nullable();
            $table->text('discrimincacao')->nullable();
            $table->float('fgts', 12, 2)->nullable();
            $table->boolean('possui_imoveis')->default(false);
            $table->text('especifique')->nullable();
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
        Schema::dropIfExists('pessoas_aplicacoes_financeiras');
    }
}
