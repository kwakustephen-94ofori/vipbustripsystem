<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('other_name');
            $table->string('staff_number');
            $table->integer('age');
            $table->string('contact');
            $table->string('emergency_contact');
            $table->softDeletes();
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
        Schema::dropIfExists('mates');
    }
}
