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
        Schema::create('nhanvien_phongban', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('phongban_id');
            $table->unsignedBigInteger('nhanvien_id');
            $table->timestamps();
            $table->foreign('nhanvien_id')->references('id')->on('nhanvien')->onDelete("RESTRICT")->onUpdate("RESTRICT");
            $table->foreign('phongban_id')->references('id')->on('phongban')->onDelete("RESTRICT")->onUpdate("RESTRICT");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_phongban_nhanviens');
    }
};
