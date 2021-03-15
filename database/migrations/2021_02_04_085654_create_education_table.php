<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationTable extends Migration
{

    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
            $table->string('education_id', 30);
            $table->string('level', 30);
            $table->timestamps();
            $table->primary('education_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('education');
    }
}
