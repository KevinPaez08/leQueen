<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCabaniasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cabanias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 45);
            $table->string('url')->nullable();
            $table->decimal('precio', 8, 2);
            $table->string('descripcion');
            $table->boolean('disponibilidad');
            // $table->unsignedBigInteger('tipoCabania_id');
            // $table->foreign('tipoCabania_id')
            //         ->references('id')->on('tipo_cabanias')
            //         ->onDelete('cascade');
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
        Schema::dropIfExists('cabanias');
    }
}