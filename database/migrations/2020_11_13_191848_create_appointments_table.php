<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('docname');
            $table->string('docemail');
            $table->string('dochname');
            $table->string('docadd');
            $table->string('docspel');
            $table->string('docfee');
            $table->string('patname');
            $table->string('patemail');
            $table->string('patmob');
            $table->string('patadd');
            $table->string('patblood');
            $table->string('appndate');
            $table->string('appntime');
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
        Schema::dropIfExists('appointments');
    }
}
