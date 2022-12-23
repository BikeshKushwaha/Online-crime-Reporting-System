<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case', function (Blueprint $table) {
            $table->integer('case_id');
            $table->string('criminal_name');
            $table->integer('age');
            $table->string('gender');
            $table->string('crimial_father_name');
            $table->string('province');
            $table->string('muiciparty');
            $table->string('tole');
            $table->integer('word_no');
            $table->string('crime_type');
            $table->text('case_details');
            $table->integer('date');
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
        Schema::dropIfExists('case');
    }
}
