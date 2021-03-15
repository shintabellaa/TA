<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFunctionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('functionals', function (Blueprint $table) {
            $table->string('functional_id', 20);
            $table->string('information', 50);
            $table->timestamps();
            $table->primary('functional_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('functionals');
    }
}
