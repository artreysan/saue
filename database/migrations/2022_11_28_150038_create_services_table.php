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
        Schema::create('services', function (Blueprint $table) {
            $table->id();

            $table->char('nodo', 10);
            $table->boolean('internet');
            $table->ipAddress('ip')->nullable();
            $table->boolean('vpn');


            $table->unsignedBigInteger('collaborator_id');
            $table->foreign('collaborator_id')
                  ->references('id')
                  ->on('collaborators');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
};
