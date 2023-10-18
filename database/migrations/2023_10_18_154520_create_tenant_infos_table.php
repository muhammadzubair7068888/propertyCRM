<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenantInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenant_infos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDeleteCascade()->onUpdateCascade();
            $table->string('tenant_type')->nullable();
            $table->string('kin_name')->nullable();
            $table->string('kin_phone_number')->nullable();
            $table->string('kin_relation')->nullable();
            $table->string('kin_emergency_name')->nullable();
            $table->string('kin_emergency_phone_number')->nullable();
            $table->string('kin_emergency_emial')->nullable();
            $table->string('kin_emergency_relation')->nullable();
            $table->string('kin_emergency_postal_address')->nullable();
            $table->string('kin_emergency_physical_address')->nullable();
            $table->string('employment_status')->nullable();
            $table->string('employment_position')->nullable();
            $table->string('employment_contact_phone')->nullable();
            $table->string('employment_contact_email')->nullable();
            $table->string('employment_postal_address')->nullable();
            $table->string('employment_physical_address')->nullable();
            $table->string('business_name')->nullable();
            $table->string('licence_name')->nullable();
            $table->string('tax_id')->nullable();
            $table->string('bussiness_address')->nullable();
            $table->string('bussiness_industry')->nullable();
            $table->string('bussiness_description')->nullable();
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
        Schema::dropIfExists('tenant_infos');
    }
}
