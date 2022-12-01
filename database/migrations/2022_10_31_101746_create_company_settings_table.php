<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanySettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_settings', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('facebook');
            $table->string('twitter');
            $table->string('instragram');
            $table->string('linkedin');
            $table->string('pinterest');
            $table->string('factory');
            $table->text('address');
            $table->foreignId('user_id');
            $table->foreignId('register_id');
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
        Schema::dropIfExists('companySettings');
    }
}
