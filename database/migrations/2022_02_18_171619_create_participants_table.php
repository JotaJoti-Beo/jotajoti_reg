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
        Schema::create('participants', function (Blueprint $table) {
            $table->id();

            $table->string('scout_name');
            $table->string('first_name');
            $table->string('last_name');

            $table->string('phone');
            $table->string('mail');

            $table->foreignId('place_id');

            $table->string('eating_habits')->nullable();
            $table->string('allergies')->nullable();

            $table->foreignId('group_id');
            $table->string('birthday');
            $table->string('gender');

            $table->date('pio_day')->nullable();

            $table->boolean('bring_laptop')->default(false);
            $table->boolean('photos_allowed')->default(false);
            $table->boolean('accept_agb')->default(false);

            $table->uuid('uuid');
            $table->uuid('reference');

            $table->boolean('isWaitingList')->default(false);

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
        Schema::dropIfExists('participants');
    }
};
