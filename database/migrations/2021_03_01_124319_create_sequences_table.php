<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSequencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sequences', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->tinyInteger('user_id');
            $table->string('prospect');
            $table->integer('specified'); /*status_id*/
            $table->bigInteger('iteration');
            $table->boolean('activated');
            $table->boolean('completed');
            $table->boolean('replied');
            $table->boolean('unsubscribed');
            $table->boolean('linear');
            $table->boolean('status');  /* 0 -> pending, 1 -> active, 2 -> stopped, 3 -> completed*/
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
        Schema::dropIfExists('sequences');
    }
}
