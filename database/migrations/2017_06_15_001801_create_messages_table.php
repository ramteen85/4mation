<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subject', 32);
            $table->string('body', 100);
            $table->integer('sender_id');
            $table->integer('recv_id');
            $table->boolean('read');
            $table->boolean('sender_deleted');
            $table->boolean('recv_deleted');
            $table->timestamps();
        });

        DB::table('messages')->insert(
            array(
                'subject' => 'hello',
                'body' => 'Welcome to the site!',
                'sender_id' => 1,
                'recv_id' => 1,
                'read' => 0,
                'sender_deleted' => 1,
                'recv_deleted' => 0,
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
        Schema::dropIfExists('messages');
    }
}
