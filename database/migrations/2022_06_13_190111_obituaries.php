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
        Schema::create('obituaries', function (Blueprint $table) {
            $table->id();
            $table->string('name_deceased')->nullable();
            $table->string('family')->nullable();
            $table->date('date_death')->nullable();
            $table->string('wake')->nullable();
            $table->string('church',250)->nullable();
            $table->string('hour')->nullable();
            $table->string('cemetery')->nullable();
            $table->unsignedBigInteger('municipality_id');
            $table->timestamps();
            $table->foreign('municipality_id')->references('id')->on('headquarters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('obituaries');
    }
};
