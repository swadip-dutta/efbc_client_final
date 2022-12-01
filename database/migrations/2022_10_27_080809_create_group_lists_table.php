<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_lists', function (Blueprint $table) {
            $table->id();
            $table->string('participate_1');
            $table->string('participate_2')->nullable();
            $table->string('participate_3')->nullable();
            $table->string('participate_4')->nullable();
            $table->string('participate_5')->nullable();
            $table->string('participate_6')->nullable();
            $table->string('participate_7')->nullable();
            $table->string('participate_8')->nullable();
            $table->foreignId('category_id');
            $table->foreignId('subcategory_id');
            $table->foreignId('Attend_status')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('group_lists');
    }
}
