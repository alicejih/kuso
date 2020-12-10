<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBandroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bandrooms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('content');
            $table->integer('people');
            $table->text('image');
            $table->integer('rent');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bandrooms');
    }
}
