<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartment_sponsorship', function (Blueprint $table) {
            $table->unsignedBigInteger('apartment_id');
            $table->unsignedBigInteger('sponsorship_id');

            // chiavi esterne corrette
            $table->foreign('apartment_id')->references('id')->on('apartments')->onDelete('cascade');
            $table->foreign('sponsorship_id')->references('id')->on('sponsorships')->onDelete('cascade');

            $table->timestamps();
            $table->primary(['apartment_id', 'sponsorship_id']);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apartment_sponsorship');
    }
};
