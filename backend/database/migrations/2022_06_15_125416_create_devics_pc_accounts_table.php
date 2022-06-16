<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevicsPcAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devics_pc_accounts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('devics_id');
            $table->unsignedBigInteger('pc_account_id');
            $table->foreign('devics_id')->references('id')->on('devices')->onDelete('cascade');
            $table->foreign('pc_account_id')->references('id')->on('pc_accounts')->onDelete('cascade');
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
        Schema::dropIfExists('devics_pc_accounts');
    }
}
