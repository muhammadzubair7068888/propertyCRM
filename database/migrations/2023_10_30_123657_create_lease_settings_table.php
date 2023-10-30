<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeaseSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lease_settings', function (Blueprint $table) {
            $table->id();
            $table->string('lease_number_prefix')->nullable();
            $table->string('invoice_number_prefix')->nullable();
            $table->string('invoice_disclaimer')->nullable();
            $table->string('invoice_term')->nullable();
            $table->string('receipt_notes')->nullable();
            $table->string('generate_invoice')->nullable();
            $table->enum('show_payment_method',[0,1])->default(0);
            $table->enum('next_period_billing',[0,1])->default(0);
            $table->enum('skip_starting_period',[0,1])->default(0);
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
        Schema::dropIfExists('lease_settings');
    }
}
