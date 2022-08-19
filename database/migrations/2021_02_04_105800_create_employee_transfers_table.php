<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeTransfersTable extends Migration
{

    public function up()
    {
        Schema::create('employee_transfers', function (Blueprint $table) {
            $table->string('employee_transfer_id', 50);
            $table->string('nip_nik', 50);
            $table->string('work_unit_id', 50);
            $table->date('employee_transfer_date', 50);
            $table->string('sign_by', 100);
            $table->text('sk_no', 50);
            $table->string('sk_file', 100);
            $table->timestamps();
            $table->primary('employee_transfer_id');

            $table->foreign('nip_nik')->references('nip_nik')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('work_unit_id')->references('work_unit_id')->on('work_units')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee__transfers');
    }
}
