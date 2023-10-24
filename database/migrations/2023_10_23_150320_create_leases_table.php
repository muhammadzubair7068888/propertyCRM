<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('property_unit_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('lease_type_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('tenant_info_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('lease_code')->nullable();
            $table->string('rent_amount')->nullable();
            $table->date('start_date')->nullable();
            $table->string('due_on')->nullable();
            $table->string('rental_deposit_amount')->nullable();
            $table->string('generate_invoice')->nullable();
            $table->enum('next_period_bill',['0','1'])->default('0');
            $table->enum('waive_penalty',['0','1'])->default('0');
            $table->enum('skip_starting_period',['0','1'])->default('0');
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
        Schema::dropIfExists('leases');
    }
}
