<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusicalRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musical_records', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->datetime('musical_start');
            $table->datetime('musical_end');
            $table->string('musical_total');
            $table->string('musical_ps');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('musical_records');
    }
}
