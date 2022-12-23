<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComplainerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complainer', function (Blueprint $table) {
            $table->integer('complainer_id');
            $table->string('name');
            $table->integer('age');
            $table->string('gender');
            $table->string('father_name');
            $table->string('province');
            $table->string('muiciparty');
            $table->string('tole');
            $table->integer('word_no');
            $table->integer('phone_no');
            $table->integer('case_id');
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
        Schema::dropIfExists('complainer');
    }
}
