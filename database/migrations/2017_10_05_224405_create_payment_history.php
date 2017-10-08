<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentHistory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        /*
         * shopID number numerical ID of the shop or website in the Verotel system
type string "subscription"
subscriptionType string "recurring"
event string "rebill"
referenceID string Merchant's reference identifier if provided
saleID number identifier of the sale in the Verotel system
amount number amount processed in nnn.nn format
currency string 3 char ISO code of the Sale currency
nextChargeOn date date of the next planned rebill [yyyy-mm-dd]
e.g "2015-04-24"
Page | 22
Parameter Type Description
subscriptionPhase string "normal" (or "discounted" if cancel discount was accepted - not
yet supported)
custom1 string pass-through variable - max 255 printable characters
custom2 string pass-through variable - max 255 printable characters
custom3 string pass-through variable - max 255 printable characters
paymentMethod string payment method used for the payment - "CC" (DDEU and BTC
only support one-time)
signature string security token to verify the integrity of the postback data (SEE
CALCULATING signature)
         */
        Schema::create('payment_history', function (Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('type');
            $table->string('integration');
            $table->string('reference')->nullable();
            $table->integer('saleid');
            $table->double('amount');
            $table->string('currency');
            $table->string('paymentMethod');
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
        //
    }
}
