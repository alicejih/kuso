<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->bigIncrements('id'); //ID
            $table->text('name'); //老師的照片
            $table->text('tea_image'); //老師的照片
            $table->string('tea_inst', 255); //老師會的樂器
            $table->text('tea_content'); //老師簡介內容
            $table->unsignedInteger('tea_hours'); //總時數
            $table->char('day1',20); //day1空堂
            $table->char('day2',20); //day2空堂
            $table->char('day3',20); //day3空堂
            $table->char('day4',20); //day4空堂
            $table->char('day5',20); //day5空堂
            $table->char('day1A',20); //day1A 空堂-被預約時段=實際空堂可預約時段
            $table->char('day2A',20); //day2A 空堂-被預約時段=實際空堂可預約時段
            $table->char('day3A',20); //day3A 空堂-被預約時段=實際空堂可預約時段
            $table->char('day4A',20); //day4A 空堂-被預約時段=實際空堂可預約時段
            $table->char('day5A',20); //day5A 空堂-被預約時段=實際空堂可預約時段
            $table->text('tea_update'); //老師更改空堂的更改時間
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
