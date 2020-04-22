<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('nama',100);
            $table->string('username',30)->unique();
            $table->string('password',100);
            $table->integer('id_outlet')->unsigned();
            $table->enum('role',['admin','kasir','owner']);
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
        Schema::dropIfExists('users');
    }
}
