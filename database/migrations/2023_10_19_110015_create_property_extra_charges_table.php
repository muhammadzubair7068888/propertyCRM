<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyExtraChargesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_extra_charges', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id')->constrained()->onDeleteCascade()->onUpdateCascade();
            $table->foreignId('extra_charges_id')->constrained()->onDeleteCascade()->onUpdateCascade();
            $table->integer('extra_charges_value');
            $table->string('extra_charges_Type');
            $table->string('extra_charges_frequency');
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
        Schema::dropIfExists('property_extra_charges');
    }
}
