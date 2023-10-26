<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainUtilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_utilities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete()->nullable();
            $table->foreignId('utility_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete()->nullable();
            // $table->unsignedBigInteger('property_unit_id')->nullable();
            // $table->foreign('property_unit_id')->references('id')->on('property_units');
           
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
        Schema::dropIfExists('main_utilities');
    }
}
