answers

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
        Schema::dropIfExists('answers');
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            //$table->unsignedBigInteger("user_id"); // question 1 ?
            $table->unsignedBigInteger("idquestion");
            $table->unsignedBigInteger("idtype");
            $table->boolean("required")->default(0);
            //$table->foreignId('id_questions_users')->constrained()->onUpdate('cascade');       
            $table->timestamps();
        });
        
        Schema::table('answers', function (Blueprint $table) {
            $table->foreignId('question_id')->references('id')->on('question'); 
            $table->foreignId('user_id')->references('id')->on('user'); 
           
        });


        /*Schema::table('answers', function (Blueprint $table) {
             $table->foreign('idtype')->references('id')->on('type')
             ->onUpdate('cascade')->onDelete('cascade');
             
             Schema::table('questions_answers_choice', function (Blueprint $table) {
            
            $table->foreignId('answers_choice_id')->references('id')->on('answers_choice'); 
            $table->foreignId('question_id')->references('id')->on('question'); 
        });


        });*/
    }
    
    
    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::dropIfExists('answers');
    }
};