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
            $table->id('id');
            $table->string('devics_number');
            $table->string('company');
            $table->string('pc_name');
            $table->biginteger('ostype_id')->unsigned();
            $table->foreign('ostype_id')->references('id')->on('pc_os');
            $table->boolean('is_cd_dvd_drive');
            $table->boolean('is_wired_LAN');
            $table->boolean('is_wireless_LAN');
            $table->boolean('is_internet');
            $table->boolean('is_taking_out');
            $table->boolean('is_LanScopeCat');
            $table->biginteger('web_browser_id')->unsigned();
            $table->foreign('web_browser_id')->references('id')->on('web_browsers');
            $table->biginteger('mailer_id');
            $table->biginteger('antivirus_software_id');
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
        Schema::drop('devices');
    }
}
