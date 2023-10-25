<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_units', function (Blueprint $table) {
            $table->id();
            $table->string('unit_name');
            $table->string('unit_floor');
            $table->foreignId('property_id')->constrained()->onDeleteCascade()->onUpdateCascade();
            $table->string('rent_amount');
            $table->string('unit_type');
            $table->string('bed_room');
            $table->string('bath_room');
            $table->string('total_room');
            $table->string('square_foot');
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
        Schema::dropIfExists('property_units');
    }
}
