<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatefieldsOnSeoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('seo', function (Blueprint $table) {
            $table->text('observacoes')->nullable();
            $table->datetime('adquirir_em')->nullable();
            $table->string('unidade_interesse')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('seo', function (Blueprint $table) {
            $table->dropColumn('unidade_interesse');
            $table->dropColumn('adquirir_em');
            $table->dropColumn('observacoes');
        });
    }
}
