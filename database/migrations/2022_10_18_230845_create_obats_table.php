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
        Schema::create('obats', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('kodeobat')->nullable();
            $table->integer('stok')->nullable();
            $table->integer('id_jenis')->references('id')->on('jenis')->nullable()->constrained();
            $table->string('nama');
            $table->string('dosis')->nullable();
            $table->string('harga')->nullable();
            $table->date('expired')->nullable();
            $table->string('photo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('obats');
    }
};
