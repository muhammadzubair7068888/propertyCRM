<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_settings', function (Blueprint $table) {
            $table->id();
            $table->string('company_name')->nullable();
            $table->string('email')->nullable();
            $table->string('p_number')->nullable();
            // $table->string('currancy')->nullable();
            // $table->string('color_theme')->nullable();
            // $table->string('language')->nullable();
            $table->string('logo')->nullable();
            $table->string('phy_address')->nullable();
            $table->string('postal_address')->nullable();
            $table->string('website_url')->nullable();
            $table->string('zip_code')->nullable();
            // $table->string('date_format')->nullable();
            // $table->string('thousand_seprator')->nullable();
            // $table->string('decimal_seprator')->nullable();
            // $table->string('amount_decimal')->nullable();
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
        Schema::dropIfExists('general_settings');
    }
}
