<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommitteeMembershipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('committee_memberships', function (Blueprint $table) {
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users'); #Cascade?
            $table->unsignedInteger('committee_id');
            $table->foreign('committee_id')->references('id')->on('committees'); #Cascade?
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('committee_memberships');
    }
}
