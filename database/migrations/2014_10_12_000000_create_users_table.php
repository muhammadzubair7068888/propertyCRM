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
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('email')->unique()->nullable();
            $table->date('registration_date')->nullable();
            $table->string('country')->nullable();
            $table->string('national_id')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('postal_address')->nullable();
            $table->string('physical_address')->nullable();
            $table->string('residential_address')->nullable();
            $table->string('password')->nullable();
            $table->enum('user_type',['admin','landlord','tenant'])->nullable();
            $table->string('gender')->nullable();
            $table->date('DOB')->nullable();
            $table->string('martial_status')->nullable();
            $table->string('postal_code')->nullable();
            $table->enum('status',[0,1,2])->default(0)->comment('0=>Pending','1=>Active','2=>Blocked');
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
