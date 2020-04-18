<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->bigIncrements('id');
	        $table->string('scoutname')->nullable();
	        $table->string('firstname');
	        $table->string('lastname');
	        $table->string('address');
	        $table->string('plz');
	        $table->string('place');
	        $table->date('birthday');
	        $table->string('gender')->nullable();
	        $table->string('person_picture')->nullable();
	        $table->string('auth_token');
	        $table->bigInteger('FK_GRP')->unsigned()->index()->nullable();
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
        Schema::dropIfExists('participant');
    }
}
