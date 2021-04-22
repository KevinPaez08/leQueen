<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->date('fechaIncio');
            $table->date('fechaFin');
            $table->unsignedBigInteger('cabania_id');
            $table->unsignedBigInteger('user_id');
            
            $table->decimal('costoTotal', 8, 2);
            
            $table->unsignedBigInteger('metodoPago_id');

            $table->foreign('cabania_id')
                    ->references('id')->on('cabanias')
                    ->onDelete('cascade');

            $table->foreign('user_id')
                    ->references('id')->on('users')
                    ->onDelete('cascade');

            $table->foreign('metodoPago_id')
                    ->references('id')->on('metodo_pagos')
                    ->onDelete('cascade');
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
        Schema::dropIfExists('reservations');
    }
}