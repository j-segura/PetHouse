<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->text('description');
            $table->string('foto');
            $table->integer('edad');

            $table->unsignedBigInteger('categoria_id');
            $table->unsignedBigInteger('genero_id');
            $table->unsignedBigInteger('raza_id');
            $table->unsignedBigInteger('tamaño_id');

            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');
            $table->foreign('genero_id')->references('id')->on('generos')->onDelete('cascade');
            $table->foreign('raza_id')->references('id')->on('razas')->onDelete('cascade');
            $table->foreign('tamaño_id')->references('id')->on('tamaños')->onDelete('cascade');
            
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
        Schema::dropIfExists('animals');
    }
};
