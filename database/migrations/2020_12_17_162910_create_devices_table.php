<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('owner_id');
            $table->integer('type_id');
            $table->integer('registration_year');
            $table->string('management_number');
            $table->string('device_name');
            $table->string('serial_number');
            $table->integer('status_id');
            $table->integer('employee_id');
            $table->string('location');
            $table->date('lease_end_date')->nullable();    
            $table->string('remarks')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('devices');
    }
}
