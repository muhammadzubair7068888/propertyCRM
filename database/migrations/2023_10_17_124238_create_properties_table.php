<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDeleteCascade()->onUpdateCascade();
            $table->foreignId('property_type_id')->constrained()->onDeleteCascade()->onUpdateCascade();
            $table->string('property_name')->nullable();
            $table->string('property_code')->nullable();
            $table->string('location')->nullable();
            $table->integer('agent_commission_value')->nullable();
            $table->string('agent_commission_type')->nullable();
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
        Schema::dropIfExists('properties');
    }
}
