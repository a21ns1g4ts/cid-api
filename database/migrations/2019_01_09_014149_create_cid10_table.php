<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCid10Table extends Migration
{
    public function up()
    {
        Schema::create('cid10', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo' , 10);
            $table->string('nome' , 254);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('cid10');
    }
}
