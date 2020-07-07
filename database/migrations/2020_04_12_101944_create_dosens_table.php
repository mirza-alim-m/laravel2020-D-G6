<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosen', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('dosen_nip', 11);
            $table->string('dosen_nama', 100);
            $table->string('image')->nullable();
            $table->string('pdf')->nullable();
            $table->bigInteger('mata_kuliah_id')->unsigned()->index();
            $table->string('dosen_no_telpon', 15);
            $table->text('dosen_alamat');
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
        Schema::dropIfExists('dosens');
    }
}
