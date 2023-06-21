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
        Schema::create('lophocs', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');

            $table->unsignedBigInteger('id_truonghoc');
            $table->foreign('id_truonghoc')->references('id')->on('truonghocs')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lophocs');
    }
};
