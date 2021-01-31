<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitorsTable extends Migration
{
    public function up()
    {
        Schema::create('visitors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ip');
            $table->string('end_point');
            $table->timestamp('created_at' );
        });
    }

    public function down()
    {
        Schema::dropIfExists('visitors');
    }
}
