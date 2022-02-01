<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebAccountsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web_accounts', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->string('password');
            $table->text('note')->nullable();
            $table->biginteger('web_account_category_id')->unsigned();
            $table->foreign('web_account_category_id')->references('id')->on('web_account_categories');
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
        Schema::drop('web_accounts');
    }
}
