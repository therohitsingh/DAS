<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patientinfos', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('mobile');
            $table->string('age');
            $table->string('address');
            $table->string('blood');
            $table->string('gender');
            $table->string('image');
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
        Schema::dropIfExists('patientinfos');
    }
}
