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
            $table->id(); 
            $table->string('name', 255);
            $table->date('date_debut');
            $table->date('date_fine');
            $table->enum('status', ['pending', 'en cours', 'terminer'])->default('pending');
            $table->bigInteger('user_id')->unsigned(); 
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->bigInteger('salle_id')->unsigned(); 
            $table->foreign('salle_id')->references('id')->on('Salle')->onDelete('cascade');
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
