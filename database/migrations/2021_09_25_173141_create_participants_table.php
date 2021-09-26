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
            $table->id();
            $table->string('tn_scout_name')->nullable();
            $table->string('tn_first_name');
            $table->string('tn_last_name');

            $table->string('tn_phone')->nullable();
            $table->string('tn_mail')->nullable();

            $table->string('parent_first_name');
            $table->string('parent_last_name');

            $table->string('parent_phone');
            $table->string('parent_mail');

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
}
