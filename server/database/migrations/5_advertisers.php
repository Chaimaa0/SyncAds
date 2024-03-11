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
    public function up():void
    {
        Schema::create('advertiser', function (Blueprint $table) {
            $table->id();
            $table->string('name', 45);
            // $table->unsignedBigInteger('user_id');
            // $table->unsignedBigInteger('advertiser_activity')->nullable();

            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('advertiser_activity')->references('id')->on('business_activities');

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
        Schema::dropIfExists('advertiser');
    }
};