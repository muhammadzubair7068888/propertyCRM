<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tenant_info_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('lease_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('payment_method_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();

            $table->string('amount');
            $table->date('payment_date')->nullable();
            $table->string('paid_by')->nullable();;
            $table->string('reference_number')->nullable();;
            $table->string('payment_for')->nullable();;
            $table->string('extra_note')->nullable();;
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
        Schema::dropIfExists('payments');
    }
}
