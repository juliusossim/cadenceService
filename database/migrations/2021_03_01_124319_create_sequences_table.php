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
            $table->string('prospect')->nullable();
            $table->integer('specified')->nullable(); /*status_id*/
            $table->bigInteger('iteration')->default(0);
            $table->boolean('activated')->default(false);
            $table->boolean('completed')->default(true);
            $table->boolean('replied')->default(true);
            $table->boolean('unsubscribed')->default(true);
            $table->boolean('linear')->default(true);
            $table->integer('status')->default(0);  /* 0 -> pending, 1 -> active, 2 -> stopped, 3 -> completed*/
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
