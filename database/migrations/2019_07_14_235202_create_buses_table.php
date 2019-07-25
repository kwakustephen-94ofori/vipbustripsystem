<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('busmodel');
            $table->string('registration_number');
            $table->unsignedInteger('bus_type_id')->nullable();
            $table->string('capacity');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('bus_type_id')
                  ->references('id')
                  ->on('bustypes')
                  ->onDelete('set null')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buses');
    }
}
