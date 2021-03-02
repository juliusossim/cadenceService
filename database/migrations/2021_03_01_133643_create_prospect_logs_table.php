<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProspectLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prospect_logs', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('sequence_id');
            $table->text('prospect')->nullable(false);
            $table->integer('stage')->default(1);
            $table->integer('circle')->default(0);
            $table->boolean('replied');
            $table->boolean('completed');
            $table->boolean('unsubscribed');
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
        Schema::dropIfExists('prospect_logs');
    }
}
