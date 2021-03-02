<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskSequencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_sequences', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('sequence_id');
            $table->integer('task_id');
            $table->text('settings')->default('{}')->nullable(false);;
            $table->text('conditions')->default('{}')->nullable(false);;
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
        Schema::dropIfExists('task_sequences');
    }
}
