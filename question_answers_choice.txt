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
        Schema::dropIfExists('questions_answers_choice');
        Schema::create('questions_answers_choice', function (Blueprint $table) {
            $table->timestamps();
            //$table->unsignedBigInteger('answers_choice_id')->unsigned();
            //$table->unsignedBigInteger('question_id')->unsigned();
        });

        Schema::table('questions_answers_choice', function (Blueprint $table) {
            $table->foreignId('answers_choice_id')->references('id')->on('answers_choice'); 
            $table->foreignId('question_id')->references('id')->on('question'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions_answers_choice');
    }
};
