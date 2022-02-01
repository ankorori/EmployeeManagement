<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebAccountPcAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web_account_pc_account', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('web_account_id');
            $table->unsignedBigInteger('pc_account_id');
            $table->foreign('web_account_id')->references('id')->on('web_accounts')->onDelete('cascade');
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
        Schema::dropIfExists('web_account_pc_account');
    }
}
