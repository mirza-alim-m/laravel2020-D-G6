<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRuangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('ruangs', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string("kelas", 6);
          $table->string('image')->nullable();
          $table->string('pdf')->nullable();
          $table->string("gedung", 2);
          $table->timestamps();
          $table->softDeletesTz();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ruang');
    }
}
