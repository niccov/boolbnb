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
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('rooms');
            $table->integer('beds');
            $table->integer('bathrooms');
            $table->bigInteger('mq');
            $table->string('address');
            $table->decimal('lat');
            $table->decimal('lon');
            $table->string('photo');
            $table->boolean('visible');
            

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
        Schema::dropIfExists('apartments');
    }
};
