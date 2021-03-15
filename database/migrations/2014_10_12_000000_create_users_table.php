<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('nip_nik', 30);
            $table->unsignedBigInteger('role_id');
            $table->string('nidn', 30)->nullable();
            $table->string('username', 50);
            $table->string('password');
            $table->string('title_ahead', 50);
            $table->string('real_name', 50);
            $table->string('back_title', 50);
            $table->string('birth_place', 50);
            $table->date('birth_date');
            $table->text('photo')->nullable();
            $table->string('blood_group', 50);
            $table->string('height', 50);
            $table->string('weight', 50);
            $table->string('handicap', 50);
            $table->string('email')->unique();
            $table->string('id_card_number', 50);
            $table->string('npwp', 50);
            $table->string('bpjs', 50);
            $table->enum('gender', ['laki-laki', 'perempuan']);
            $table->string('religion', 50);
            $table->string('marital_status', 50);
            $table->string('citizen_status', 50);
            $table->string('retirement_age_limit', 50);
            $table->string('employee_status', 50);
            // $table->timestamp('email_verified_at')->nullable();
            $table->primary('nip/nik');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
