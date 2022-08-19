<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStructuralDetailsTable extends Migration
{

    public function up()
    {
        Schema::create('structural_details', function (Blueprint $table) {
            $table->string('nip_nik', 50);
            $table->string('structural_id', 50);
            $table->date('tmt');
            $table->string('sign_by', 100);
            $table->text('sk_no', 50);
            $table->date('sk_date');
            $table->string('status', 50);
            $table->string('sk_file', 100);
            $table->timestamps();
            $table->primary(['nip_nik','tmt','structural_id']);

            $table->foreign('nip_nik')->references('nip_nik')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('structural_id')->references('structural_id')->on('structurals')->onDelete('cascade')->onUpdate('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('structural__details');
    }
}
