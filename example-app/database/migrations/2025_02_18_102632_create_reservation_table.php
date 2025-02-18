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
        Schema::create('reservation', function (Blueprint $table) {
            $table->increments ('id');
            $table->string('name', 255);
            $table->timestamp('created_at')->nullable();
            $table->date('date_reservation');
            $table->enum('status' , array('pending', 'en cours', 'terminer'))->default('pending');
            $table->integer('user_id')->unsigned(); 
            $table->foreign('user_id')->references('id')->on('users'); 
            $table->integer('salle_id')->unsigned(); 
            $table->foreign('salle_id')->references('id')->on('salle');
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
        Schema::dropIfExists('reservation');
    }
};
