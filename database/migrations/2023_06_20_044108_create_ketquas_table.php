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
        Schema::create('ketquas', function (Blueprint $table) {
            $table->id('id');
            $table->string('name_monhoc');
            $table->float('diemmieng');
            $table->float('diem15phut');
            $table->float('diem1tiet');
            $table->float('diemhocky');
            $table->unsignedBigInteger('id_hocsinh');
            $table->unsignedBigInteger('id_canbo');
            $table->foreign('id_hocsinh')->references('id')->on('hocsinhs')->onDelete('cascade');
            $table->foreign('id_canbo')->references('id')->on('canbos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ketquas');
    }
};
