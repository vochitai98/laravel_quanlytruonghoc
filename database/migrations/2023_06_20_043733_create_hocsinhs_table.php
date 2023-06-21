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
        Schema::create('hocsinhs', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');

            $table->unsignedBigInteger('id_lop');
            $table->foreign('id_lop')->references('id')->on('lophocs')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hocsinhs');
    }
};
