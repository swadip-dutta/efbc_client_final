<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('slug');
            $table->string('last_name')->nullable();
            $table->string('badge_name')->nullable();
            $table->string('email');
            $table->string('second_email')->unique()->nullable();
            $table->string('org_name')->nullable();
            $table->string('job_title')->nullable();
            $table->string('addr_line1');
            $table->string('addr_line2')->nullable();
            $table->string('city')->nullable();;
            $table->string('state')->nullable();;
            $table->string('country')->nullable();;
            $table->string('zip')->nullable();;
            $table->string('mobile');
            $table->string('office_phone')->nullable();
            $table->boolean('is_conf_first')->default(2)->comments('1=yes 2=No');
            $table->string('company_type')->nullable();
            $table->string('if_other')->nullable();
            $table->string('emerg_cont_name')->nullable();
            $table->string('emerg_cont_phone')->nullable();
            //If You Chose Golf 
            $table->foreignId('group_Cat_Id');
            $table->string('Attend_status')->default(2)->comments('1=yes 2=No');
            $table->integer('golfHandicup')->nullable();
            $table->string('rentalClubs')->nullable();
            $table->string('in_grp_list')->default(1)->comments('1=null 2=not_null');
            //If you Chose Massage
            $table->string('messagePreferredTime')->nullable();
            //Conference Meals
            $table->string('wedWelReception')->default(1)->comments('1=attend 2=not attend');
            $table->string('thursdayBreakfast')->default(1)->comments('1=attend 2=not attend');
            $table->string('thursdayLuncheon')->default(1)->comments('1=attend 2=not attend');
            $table->string('thursdayDinner')->default(1)->comments('1=attend 2=not attend');
            // Guest Dinner 
            $table->string('spouseDinnerTicket')->default(2)->comments('1=yes 2=no');
            $table->string('spouseFirstName')->nullable();
            $table->string('spouseLastName')->nullable();

            $table->string('fridayBreakfast')->default(1)->comments('1=attend 2=not attend');
            $table->string('dietaryRestrictions')->nullable();
            $table->string('payment_method');
            $table->float('payment_amount')->nullable();
            $table->string('payment_status')->default(2)->comments('1=paid 2=pending');
            $table->string('card_name')->nullable();
            $table->string('card_number')->nullable();
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
        Schema::dropIfExists('registers');
    }
}
