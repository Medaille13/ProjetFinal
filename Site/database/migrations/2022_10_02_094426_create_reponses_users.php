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
        Schema::create('reponses_users', function (Blueprint $table) {
            $table->id();
            //création attribut
            $table->string("email");
            $table->string("question2");
            $table->string("question3");
            $table->string("question4");
            $table->string("question5");
            $table->string("question6");
            $table->string("question7");
            $table->string("question8");
            $table->string("question9");
            $table->string("question10");
            $table->string("question11");
            $table->string("question12");
            $table->string("question13");
            $table->string("question14");
            $table->string("question15");
            $table->string("question16");
            $table->string("question17");
            $table->string("question18");
            $table->string("question19");
            $table->string("question20");
            //$table->foreignId('id_questions_users')->constrained()->onUpdate('cascade');       
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
        Schema::dropIfExists('reponses_users');
    }
};