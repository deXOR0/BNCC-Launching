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
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('gender');
            $table->string('address');
            $table->string('city');
            $table->string('place_of_birth');
            $table->string('date_of_birth');
            $table->string('nim')->unique();
            $table->string('campus');
            $table->string('major');
            $table->string('fyp_batch');
            $table->string('phone_number');
            $table->string('line_id');
            $table->unsignedBigInteger('schedule_id')->nullable();
            $table->string('lnt_subject')->nullable();
            $table->integer('role')->default(0);
            $table->integer('session')->default(1);
            $table->timestamps();
            $table->foreign('schedule_id')->references('id')->on('schedules')->onDelete('SET NULL');
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
