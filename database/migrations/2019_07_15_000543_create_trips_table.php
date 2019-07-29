<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->unsignedInteger('driver_id')->nullable();
            $table->unsignedInteger('mate_id')->nullable();
            $table->unsignedInteger('bus_id')->nullable();
            $table->unsignedInteger('departingpoint_id')->nullable();
            $table->unsignedInteger('destinapointpoint_id')->nullable();
            $table->dateTime('departure_date');
            $table->time('departure_time')->nullable();
            $table->dateTime('arrival_date');
            $table->time('arrival_time')->nullable();
            $table->mediumText('driver_comments')->nullable();
            $table->integer('number_males')->nullable();
            $table->integer('number_females')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('driver_id')
                  ->references('id')
                  ->on('drivers')
                  ->onDelete('set null')
                  ->onUpdate('cascade');

            $table->foreign('mate_id')
                  ->references('id')
                  ->on('mates')
                  ->onDelete('set null')
                  ->onUpdate('cascade');

            $table->foreign('bus_id')
                  ->references('id')
                  ->on('buses')
                  ->onDelete('set null')
                  ->onUpdate('cascade');

            $table->foreign('departingpoint_id')
                  ->references('id')
                  ->on('departingpoints')
                  ->onDelete('set null')
                  ->onUpdate('cascade');

            $table->foreign('destinapointpoint_id')
                  ->references('id')
                  ->on('departingpoints')
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
        Schema::dropIfExists('trips');
    }
}
