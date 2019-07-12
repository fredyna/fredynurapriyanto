<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUASSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('u_a_s_s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('nik', 20);
            $table->String('nama', 100);
            $table->String('kelas', 10);
            $table->String('jam', 10);
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
        Schema::dropIfExists('u_a_s_s');
    }
}
