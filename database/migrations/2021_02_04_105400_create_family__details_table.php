<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamilyDetailsTable extends Migration
{

    public function up()
    {
        Schema::create('family__details', function (Blueprint $table) {
            $table->string('id_number', 50);
            $table->string('nip/nik', 50);
            $table->string('name', 100);
            $table->string('relationship', 50);
            $table->string('phone_number', 50);
            $table->date('birth_date');
            $table->string('birth_place', 100);
            $table->string('status', 50);
            $table->string('occupation', 100);
            $table->string('last_education', 100);
            $table->string('npwp_no', 50);
            $table->timestamps();
            $table->primary('id_number');

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
        Schema::dropIfExists('family__details');
    }
}
