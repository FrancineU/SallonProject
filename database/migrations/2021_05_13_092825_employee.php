<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Employee extends Migration
{
    
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
        
        $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('phone');
            $table->enum('gender', ['male', 'female']);
            $table->foreignId('location_id');
            $table->timestamps();
        });
        }

    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
