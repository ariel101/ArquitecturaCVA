<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('correspondencias', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->string('remitente',50);
            $table->string('asunto',50);
            $table->string('cite',30);
            $table->bigInteger('destinatario_id');//->unsigned();
            $table->timestamps();


            //$table->foreign('destinatario_id')->references('id')->on('destinatarios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('correspondencias');
    }
};
