<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('prefix');
            $table->string('initials');
            $table->string('address');
            $table->string('housenumber');
            $table->string('postal code');
            $table->string('city');
            $table->string('phone_number');
            $table->string('student_number');
            $table->string('birthday');
            $table->string('member_since');
            $table->string('discord_id');
            $table->string('steam_id');
            $table->boolean('newsletter');
            $table->boolean('contribution');
            $table->boolean('consent_privacy');
            $table->boolean('consent_privacy');
            $table->boolean('deleted');


            # relations to be added


            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
