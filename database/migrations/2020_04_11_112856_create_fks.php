<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::table('participants', function(Blueprint $table){
		    $table->foreign('FK_GRP')->references('id')->on('groups')->onDelete('cascade');
		    $table->foreign('FK_GRP')->references('id')->on('groups')->onDelete('cascade');
		    $table->foreign('FK_GRP')->references('id')->on('groups')->onDelete('cascade');
		    $table->foreign('FK_GRP')->references('id')->on('groups')->onDelete('cascade');
		    $table->foreign('FK_GRP')->references('id')->on('groups')->onDelete('cascade');
		    $table->foreign('FK_GRP')->references('id')->on('groups')->onDelete('cascade');
	    });

	    Schema::table('places_activities', function(Blueprint $table){
		    $table->foreign('FK_PLC')->references('id')->on('places')->onDelete('cascade');
		    $table->foreign('FK_ACT')->references('id')->on('activities')->onDelete('cascade');
	    });
    }
}
