<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerjalanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perjalanans', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('id_user');
            $table->date('tanggal');
            $table->time('waktu');
            $table->string('lokasi');
            $table->integer('suhu');
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
        Schema::dropIfExists('perjalanans');
    }
}