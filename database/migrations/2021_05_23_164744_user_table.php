<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserTable extends Migration
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
            $table->string('phone', 13)->nullable(false)->unique('phone');
            $table->string('password', 255)->nullable(false);
            $table->string('firstname', 255)->nullable(true)->default(null);
            $table->string('lastname', 255)->nullable(true)->default(null);
            $table->string('email', 255)->nullable(true)->default(null);
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
        //
    }
}
