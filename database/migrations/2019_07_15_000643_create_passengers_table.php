<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePassengersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passengers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('other_name');
            $table->enum('identification_type', ['NHIS','VOTERS ID', 'DRIVERS LICENCE', 'SSNIT']);
            $table->string('identification_number');
            $table->enum('gender', ['Male','Female']);
            $table->string('address');
            $table->string('emergency_contact');
            $table->unsignedInteger('departingpoint_id')->nullable();
            $table->unsignedInteger('destinapointpoint_id')->nullable();
            $table->text('purpose');
            $table->unsignedInteger('seat_number')->nullable();
            $table->timestamps();

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
        Schema::dropIfExists('passengers');
    }
}
