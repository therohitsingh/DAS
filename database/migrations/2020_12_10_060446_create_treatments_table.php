<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreatmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treatments', function (Blueprint $table) {
            $table->id();
            $table->string('docmail');
            $table->string('docname');
            $table->string('docspel');
            $table->string('docfee');
            $table->string('patname');
            $table->string('patmail');
            $table->string('patblood');
            $table->string('symp');
            $table->string('medhist')->nullable();
            $table->string('priscrip')->nullable();
            $table->string('medic')->nullable();
            $table->string('gmeetid')->nullable();

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
        Schema::dropIfExists('treatments');
    }
}
