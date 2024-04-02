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
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->string('examuid');
            $table->string('examcid');
            $table->string('examname');
            $table->string('examyear');
            $table->string('examsem');
            $table->string('examca')->nullable();
            $table->string('examatt')->nullable();
            $table->string('lech')->default(0);
            $table->string('hodch')->default(0);
            $table->string('deanch')->default(0);
            $table->string('drch')->default(0);
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
        Schema::dropIfExists('exams');
    }
};
