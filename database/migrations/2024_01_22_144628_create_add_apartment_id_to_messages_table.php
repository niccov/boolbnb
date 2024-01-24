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
        Schema::table('apartments', function (Blueprint $table) {


            $table->unsignedBigInteger('message_id')->nullable();


            // Definizione delle chiavi esterne

            $table->foreign('message_id')->references('id')->on('messages') ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    public function down()
    {

         Schema::table('apartments', function (Blueprint $table){
            $table->dropForeign(['message_id']);
            $table->dropColumn(['message_id']);
        });
    }
};
