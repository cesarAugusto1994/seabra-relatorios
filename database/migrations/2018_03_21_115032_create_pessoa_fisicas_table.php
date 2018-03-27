<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoaFisicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoa_fisica', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pessoa_id')->nullable();
            $table->string('sexo')->nullable();
            $table->string('telefone_residencial')->nullable();
            $table->string('estado_civil')->nullable();
            $table->string('regime_casamento')->nullable();
            $table->boolean('convive_miritalmente')->default(false);
            $table->string('convive_miritalmente_desde')->nullable();
            $table->string('nascimento')->nullable();
            $table->string('grau_instrucao')->nullable();
            $table->string('nacionalidade')->nullable();
            $table->string('cpf')->nullable();
            $table->string('rg')->nullable();
            $table->string('rg_data_emissao')->nullable();
            $table->string('rg_emissor')->nullable();
            $table->string('rg_estado_emissao')->nullable();
            $table->string('profissao')->nullable();
            $table->string('fiador')->nullable();
            $table->string('grau_parentesco_fiador')->nullable();
            $table->boolean('usa_fgts')->default(false);
            $table->float('fgts_valor', 12, 2)->nullable();
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
        Schema::dropIfExists('pessoa_fisica');
    }
}
