<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationDetailsTable extends Migration
{

    public function up()
    {
        Schema::create('education__details', function (Blueprint $table) {
            $table->string('education_details_id', 30);
            $table->string('education_id', 30);
            $table->string('nip_nik', 30);
            $table->string('name', 100);
            $table->string('major', 50);
            $table->year('graduation_year');
            $table->string('country', 50);
            $table->string('dean/headmaster', 50);
            $table->string('certificate_file', 100);
            $table->timestamps();
            $table->primary('education_details_id');


            $table->foreign('education_id')->references('education_id')->on('education')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('nip_nik')->references('nip_nik')->on('users')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('education__details');
    }
}
