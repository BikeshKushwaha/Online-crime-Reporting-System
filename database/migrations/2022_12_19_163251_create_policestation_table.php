<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePolicestationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('policestation', function (Blueprint $table) {
            $table->integer('policestation_id');
            $table->string('policestation_name');
            $table->text('address');
            $table->integer('tel_phone_no');
            $table->string('officer_name');
            $table->integer('officer_id');
            $table->integer('case_id');
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
        Schema::dropIfExists('policestation');
    }
}
