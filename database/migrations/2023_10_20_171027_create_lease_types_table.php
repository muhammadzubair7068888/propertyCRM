<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeaseTypesTable extends Migration
{

    public function up()
    {
        Schema::create('lease_types', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('lease_types');
    }
}
