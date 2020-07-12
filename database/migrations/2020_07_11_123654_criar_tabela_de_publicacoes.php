<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaDePublicacoes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicacoes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_criador');
            $table->string('nome_criador');
            $table->text('conteudo');
            $table->integer('curtidas')->default(0);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_criador')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('publicacoes', function (Blueprint $table) {
            $table->dropForeign(['criador']);
        });

        Schema::dropIfExists('publicacoes');
    }
}