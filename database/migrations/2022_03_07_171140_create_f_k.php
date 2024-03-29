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
        Schema::table('participants', function (Blueprint $table) {
            $table->foreign('group_id')->references('id')->on('groups');
            $table->foreign('place_id')->references('id')->on('places');
            $table->foreign('guardian_id')->references('id')->on('guardians');
        });

        Schema::table('files', function (Blueprint $table) {
            $table->foreign('participant_id')->references('id')->on('participants');
        });
    }
};
