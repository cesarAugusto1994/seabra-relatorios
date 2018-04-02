<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFiledsOnCurriculsoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('curriculos', function (Blueprint $table) {
            $table->string('email')->nullable();
            $table->string('cargo')->nullable();
            $table->string('salario')->nullable();
            $table->string('endereco')->nullable();
            $table->string('bairro')->nullable();
            $table->string('cidade')->nullable();
            $table->string('cep')->nullable();
            $table->string('creci')->nullable();
            $table->string('creci_numero')->nullable();
            $table->string('curriculo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('curriculos', function (Blueprint $table) {
          $table->dropColumn('email');
          $table->dropColumn('cargo');
          $table->dropColumn('salario');
          $table->dropColumn('endereco');
          $table->dropColumn('bairro');
          $table->dropColumn('cidade');
          $table->dropColumn('cep');
          $table->dropColumn('creci');
          $table->dropColumn('creci_numero');
          $table->dropColumn('curriculo');
      });
    }
}
