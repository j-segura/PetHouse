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
        Schema::create('animales', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->text('description');
            $table->integer('edad');            
            $table->string('tamaño');

            $table->unsignedBigInteger('categoria_id');
            $table->unsignedBigInteger('genero_id');
            $table->unsignedBigInteger('raza_id');

            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');
            $table->foreign('genero_id')->references('id')->on('generos')->onDelete('cascade');
            $table->foreign('raza_id')->references('id')->on('razas')->onDelete('cascade');

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
        Schema::dropIfExists('animales');
    }
};
