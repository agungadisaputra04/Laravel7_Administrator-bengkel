<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMontirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('montir', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama',150);
            $table->string('alamat',150);
            $table->string('jenis_kelamin',15);
            $table->string('no_hp',15);
            $table->string('email',100);
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
        Schema::dropIfExists('montir');
    }
}
