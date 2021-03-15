<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressDetailsTable extends Migration
{

    public function up()
    {
        Schema::create('address__details', function (Blueprint $table) {
            $table->string('address__details_id', 50);
            $table->string('nip/nik', 50);
            $table->string('district_id', 100);
            $table->string('street', 100);
            $table->string('phone_number', 20);
            $table->timestamps();
            $table->primary('address__details_id');

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
        Schema::dropIfExists('address__details');
    }
}
