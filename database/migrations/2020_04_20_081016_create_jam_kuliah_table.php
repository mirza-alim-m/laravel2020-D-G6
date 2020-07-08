<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJamKuliahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jam_kuliahs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('dosen_id')->unsigned()->index();
            $table->bigInteger('ruang_id')->unsigned()->index();
            $table->text('jam', 5);
            $table->text('hari', 9);
            $table->string('image')->nullable();
            $table->string('pdf')->nullable();
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
        Schema::dropIfExists('jam_kuliah');
    }
}
