<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ques', function (Blueprint $table) {
            $table->increments('que_id');
            $table->tinyInteger('user_id');
            $table->tinyInteger('q1');
            $table->tinyInteger('q2');
            $table->tinyInteger('q3');
            $table->tinyInteger('q4');
            $table->tinyInteger('q5');
            $table->tinyInteger('q6');
            $table->tinyInteger('q7');
            $table->tinyInteger('q8');
            $table->tinyInteger('q9');
            $table->tinyInteger('q10');
            $table->tinyInteger('q11');
            $table->tinyInteger('q12');
            $table->tinyInteger('q13');
            $table->tinyInteger('q14');
            $table->tinyInteger('q15');
            $table->tinyInteger('q16');
            $table->tinyInteger('q17');
            $table->tinyInteger('q18');
            $table->tinyInteger('q19');
            $table->tinyInteger('q20');
            $table->tinyInteger('q21');
            $table->tinyInteger('q22');
            $table->tinyInteger('q23');
            $table->tinyInteger('q24');
            $table->tinyInteger('q25');
            $table->tinyInteger('q26');
            $table->string('free1');
            $table->string('free2');
            $table->timestamp('created_at');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ques');
    }
}
