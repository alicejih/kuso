<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_records', function (Blueprint $table) {
            $table->id('id'); //records的id
            $table->text('tea_date'); //日期
            $table->text('tea_time'); //T時段
            $table->text('tea_remarks'); //備註
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teacher_records');
    }
}
