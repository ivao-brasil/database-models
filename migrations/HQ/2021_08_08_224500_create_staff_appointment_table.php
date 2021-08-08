<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffAppointment extends Migration
{
    /*
     * Run the migrations
     *
     * @return void
     * */

    public function up()
    {
        Schema::create('staff_appointment', function (Blueprint $table) {
            $table->id();
            $table->string('vid', 6);
            $table->string('position', 16);
            $table->dateTime('appointed_at')->useCurrent();
            $table->enum('status', ['onTrial', 'effectived']);
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
        Schema::dropIfExists('staff_appointment');
    }
}