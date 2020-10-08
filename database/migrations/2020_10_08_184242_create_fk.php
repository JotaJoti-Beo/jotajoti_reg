<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('participant', function(Blueprint $table) {
           $table->foreign('group_id')->references('id')->on('group');
           $table->foreign('place_id')->references('id')->on('place');
        });

        Schema::table('file', function(Blueprint $table) {
            $table->foreign('participant_id')->references('id')->on('participant');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
