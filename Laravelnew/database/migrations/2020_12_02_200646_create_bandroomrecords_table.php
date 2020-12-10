<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBandroomrecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bandroomrecords', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('lentdate')->nullable();
            $table->text('lenttime')->nullable();
            $table->text('content')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bandroomrecords');
    }
}
