<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveyAnswerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey_answer', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('survey_question');
            $table->string('call_id');
            $table->string('from_number');
            $table->string('to_number');
            $table->enum('score', ["Muy satisfecho","Satisfecho","Neutro","Insatisfecho","Muy insatisfecho"]);
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
        Schema::dropIfExists('survey_answer');
    }
}
