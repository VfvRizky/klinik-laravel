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
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->string('kodepasien')->nullable();
            $table->string('nama');
            $table->string('alamat')->nullable();
            $table->date('lahir');
            $table->string('nik')->nullable();
            $table->string('kelamin');
            $table->string('telepon');
            $table->string('agama');
            $table->string('pendidikan')->nullable();
            $table->string('pekerjaan')->nullable();
            
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
        Schema::dropIfExists('pasiens');
    }
};
