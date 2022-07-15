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
            
            $table->string('nama');
            $table->string('alamat');
            $table->date('lahir');
            $table->integer('nik');
            $table->string('kelamin');
            $table->integer('telepon');
            $table->string('agama');
            $table->string('pendidikan');
            $table->string('pekerjaan');
            
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
