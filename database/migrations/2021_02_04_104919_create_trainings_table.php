<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainings', function (Blueprint $table) {
            $table->string('training_id', 20);
            $table->string('nip/nik', 30);
            $table->string('number_of_hour', 30);
            $table->string('training_name', 100);
            $table->string('type_of_training', 30);
            $table->string('place', 100);
            $table->year('year');
            $table->string('certificate_file', 100);
            $table->timestamps();
            $table->primary('training_id');

            $table->foreign('nip/nik')->references('nip/nik')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trainings');
    }
}
