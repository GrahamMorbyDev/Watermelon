<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('address_line_one');
            $table->string('address_line_two')->nullable();
            $table->string('address_line_three')->nullable();
            $table->string('town');
            $table->string('country');
            $table->string('country_code')->nullable();
            $table->string('postcode');
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
        Schema::dropIfExists('addresses');
    }
}
