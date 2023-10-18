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
            $table->string('payment_method')->nullable();
            $table->string('payment_description')->nullable();
            $table->string('extra_charge_name')->nullable();
            $table->integer('extra_charge_value')->nullable();
            $table->string('extra_charge_type')->nullable();
            $table->string('extra_charge_frequency')->nullable();
            $table->string('late_fee_name')->nullable();
            $table->string('late_fee_type')->nullable();
            $table->string('late_fee_value')->nullable();
            $table->string('late_fee_grace_period')->nullable();
            $table->string('late_fee_frequency')->nullable();

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
