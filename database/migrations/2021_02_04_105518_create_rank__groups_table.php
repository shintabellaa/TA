<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRankGroupsTable extends Migration
{

    public function up()
    {
        Schema::create('rank__groups', function (Blueprint $table) {
            $table->string('rank_group_id', 50);
            $table->string('nip/nik', 50);
            $table->date('tmt');
            $table->text('sk_no');
            $table->date('sk_date');
            $table->string('sign_by', 50);
            $table->string('basic_rules', 100);
            $table->string('sk_file', 100);
            $table->timestamps();
            $table->primary('rank_group_id');
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
        Schema::dropIfExists('rank__groups');
    }
}
