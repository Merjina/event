<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userdetails', function (Blueprint $table) {
            $table->string('unique_id');
            $table->string('name');
            $table->string('email'); 
            $table->string('gender'); 
            $table->date('d_o_b'); 
            $table->string('religion');
            $table->string('caste');
            $table->string('fname'); 
            $table->string('foccup'); 
            $table->string('mname'); 
            $table->string('moccup'); 
            $table->string('qualif'); 
            $table->string('address'); 
            $table->string('cnumber');
            $table->string('degree'); 
            $table->string('langs');
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
};
