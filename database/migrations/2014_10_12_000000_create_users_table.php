<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username', 32)->unique();
            $table->string('firstname', 50);
            $table->string('lastname', 50);
            $table->integer('role');
            $table->integer('intro');
            $table->string('email', 50);
            $table->string('about', 500);
            $table->string('password', 100);
            $table->rememberToken();
            $table->timestamps();
        });

        //create and save user (demo purposes)

    
        DB::table('users')->insert(
            array(
                'username' => 'admin',
                'firstname' => 'admin',
                'lastname' => 'admin',
                'email' => 'admin@admin.com',
                'about' => '<< I am the main Administrator >>',
                'role' => 1,
                'intro' => 0,
                'password' => bcrypt('demo'),
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
        Schema::dropIfExists('users');
    }
}
