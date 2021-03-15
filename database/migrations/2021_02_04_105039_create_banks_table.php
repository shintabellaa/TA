<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBanksTable extends Migration
{

    public function up()
    {
        Schema::create('banks', function (Blueprint $table) {
            $table->string('id_bank', 30);
            $table->string('nip_nik', 30);
            $table->string('bank_name_id', 30);
            $table->string('account_number', 30);
            $table->date('creation_date', 30);
            $table->timestamps();
            $table->primary(['id_bank', 'nip_nik']);

            $table->foreign('nip_nik')->references('nip/nik')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('bank_name_id')->references('bank_name_id')->on('bank__names')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('banks');
    }
}
