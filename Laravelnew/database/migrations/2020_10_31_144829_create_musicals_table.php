<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusicalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musicals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('musical_name');
            $table->string('musical_sort');
            $table->string('musical_content');
            $table->integer('musical_rent');
            $table->string('musical_pic');   

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('musicals');
    }
}
