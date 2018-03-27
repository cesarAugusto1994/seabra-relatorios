<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoaImoveisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoa_imoveis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pessoa_id')->nullable();
            $table->string('cidade')->nullable();
            $table->string('bairro')->nullable();
            $table->boolean('quitado')->default(true);
            $table->float('valor_prestacao', 12, 2)->nullable();
            $table->float('valor_estimado', 12, 2)->nullable();
            $table->integer('prazo_restante')->nullable();
            $table->boolean('ativo')->default(true);
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
        Schema::dropIfExists('pessoa_imoveis');
    }
}
