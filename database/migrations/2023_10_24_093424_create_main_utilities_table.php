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
            $table->foreignId('property_unit_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete()->nullable()->nullable();
            $table->date('reading_date')->nullable();
            $table->string('current_reading')->nullable();
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
