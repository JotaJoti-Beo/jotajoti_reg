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
            $table->string('auth_token');
            $table->string('eating_habits');
            $table->string('allergies');

            $table->string('parent_firstname');
            $table->string('parent_lastname');
            $table->string('parent_phone');
            $table->string('parent_mail');

            $table->string('molding');

            $table->boolean('laptop');

            $table->boolean('photos');
            $table->boolean('conditions');

            $table->bigInteger('FK_GRP')->unsigned()->index();
            $table->bigInteger('FK_EMDA')->unsigned()->index();
            $table->bigInteger('FK_PLACE')->unsigned()->index();
            $table->bigInteger('FK_USR_ACT')->unsigned()->index();
            $table->bigInteger('FK_HABITS')->unsigned()->index();
            $table->bigInteger('FK_STAGE')->unsigned()->index();
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
