<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddressFixes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('addresses', function (Blueprint $table) {
            $table->string('town')->nullable()->change();
            $table->string('country')->nullable()->change();
            $table->integer('user_id')->nullable()->change();
            $table->string('address_line_one')->nullable()->change();
            $table->string('postcode')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
