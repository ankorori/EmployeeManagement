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
            $table->bigint('pc_account_id');
            $table->bigint('ostype');
            $table->bool('is_cd_dvd_drive');
            $table->bool('is_wired_LAN');
            $table->bool('is_wireless_LAN');
            $table->bool('is_internet');
            $table->bool('is_taking_out');
            $table->bool('is_LanScopeCat');
            $table->int('web_browser_id');
            $table->int('mailer');
            $table->int('antivirus_software');
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
