<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Location extends Migration
{
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
        
            $table->id();
            $table->string('province');
            $table->string('district');
            $table->string('cell');
            $table->timestamps();
            });
    }

    
    public function down()
    {
        Schema::dropIfExists('locations');
    }
}
