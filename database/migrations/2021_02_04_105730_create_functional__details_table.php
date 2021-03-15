<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFunctionalDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('functional__details', function (Blueprint $table) {
            $table->string('nip/nik', 50);
            $table->string('functional_id', 50);
            $table->date('tmt');
            $table->string('sign_by', 100);
            $table->text('sk_no', 50);
            $table->date('sk_date');
            $table->string('status', 50);
            $table->string('sk_file', 100);
            $table->timestamps();
            $table->primary(['nip/nik','functional_id']);

            $table->foreign('nip/nik')->references('nip/nik')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('functional_id')->references('functional_id')->on('functionals')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('functional__details');
    }
}
