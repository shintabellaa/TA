<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegenciesTable extends Migration
{

    public function up()
    {
        Schema::create('regencies', function (Blueprint $table) {
            $table->string('regency_id',20);
            $table->string('regency_name', 50);
            $table->timestamps();
            $table->primary('regency_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('regencies');
    }
}
