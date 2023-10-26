<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacateNoticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacate_notices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tenant_info_id')->constrained('tenant_infos')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('lease_id')->constrained('leases')->cascadeOnDelete()->cascadeOnUpdate();
            $table->date('vacate_date')->nullable();
            $table->string('vacate_reason')->nullable();
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
        Schema::dropIfExists('vacate_notices');
    }
}
