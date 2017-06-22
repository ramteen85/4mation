<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('emails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname', 50);
            $table->string('lastname', 50);
            $table->string('email', 50);
            $table->string('subject', 100);
            $table->string('message', 600);    
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
        Schema::dropIfExists('emails');
    }
}
