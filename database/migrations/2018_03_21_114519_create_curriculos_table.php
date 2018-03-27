<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurriculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curriculos', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nome');

            $table->string('idade')->nullable();
            $table->string('telefone_ddd')->nullable();
            $table->string('telefone')->nullable();
            $table->string('celular_ddd')->nullable();
            $table->string('celular')->nullable();
            $table->boolean('veiculo_proprio')->default(false);
            $table->boolean('experiencia_mercado_imobiliario')->default(false);
            $table->string('escolaridade')->nullable();
            $table->string('idioma_ingles')->nullable();
            $table->string('idioma_espanhol')->nullable();
            $table->string('outros_idiomas')->nullable();
            $table->string('outros_idiomas_descricao')->nullable();
            $table->string('conhecimentos_informatica')->nullable();
            $table->boolean('experiencia_televendas')->default(false);
            $table->text('experiencias_profissionais')->nullable();
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
        Schema::dropIfExists('curriculos');
    }
}
