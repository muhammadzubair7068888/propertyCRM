<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyPaymentMethodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_payment_methods', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id')->constrained()->onDeleteCascade()->onUpdateCascade();
            $table->foreignId('payment_method_id')->constrained()->onDeleteCascade()->onUpdateCascade();
            $table->string('payment_description')->nullable();
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
        Schema::dropIfExists('property_payment_methods');
    }
}
