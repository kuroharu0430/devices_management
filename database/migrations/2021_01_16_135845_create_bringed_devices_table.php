<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBringedDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bringed_devices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('device_id');
            
            $table->boolean('checks_virus')->nullable();
            $table->date('checks_virus_date')->nullable();
            $table->string('checks_virus_reason')->nullable();

            $table->boolean('encrypts')->nullable();
            $table->string('encrypts_remarks')->nullable();
            $table->boolean('connects_own_LAN')->nullable();
            $table->boolean('exchanges_data')->nullable();
            $table->integer('personal_data')->nullable();
            $table->string('how_to_delete')->nullable();

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
        Schema::dropIfExists('bringed_devices');
    }
}
