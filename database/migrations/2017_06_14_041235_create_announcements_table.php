<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateAnnouncementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('announcements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 50);
            $table->string('body', 600);
            $table->integer('issue_id');
            $table->timestamps();
        });

       DB::table('announcements')->insert(
            array(
                'title' => "The System is alive!",                
                'body' => "The Employee Management System has been created! Have fun!",
                'issue_id'=> 1,
                "created_at" => \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now()

            )
        );


        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('announcements');
        
    }
}
