<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoaJuridicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoa_juridica', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pessoa_id')->nullable();
            $table->datetime('ano_fundacao')->nullable();
            $table->string('ie')->nullable();
            $table->string('cnpj')->nullable();
            $table->string('ramo_atividade')->nullable();
            $table->float('capital_atual', 12, 2)->nullable();
            $table->string('representante')->nullable();
            $table->string('grau_parentesco_fiador')->nullable();
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
        Schema::dropIfExists('pessoa_juridica');
    }
}
