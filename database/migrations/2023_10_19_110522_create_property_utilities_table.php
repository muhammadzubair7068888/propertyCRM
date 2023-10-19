<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyUtilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_utilities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id')->constrained()->onDeleteCascade()->onUpdateCascade();
            $table->foreignId('utilities_id')->constrained()->onDeleteCascade()->onUpdateCascade();
            $table->integer('variable_cost');
            $table->integer('fixed_fee');
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
        Schema::dropIfExists('property_utilities');
    }
}
