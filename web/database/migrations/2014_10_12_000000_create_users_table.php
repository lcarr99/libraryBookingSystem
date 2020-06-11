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
            $table->id("u_id");
            $table->string('first_name');
            $table->string('last_name');
            $table->timestamp('date_of_birth');
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamps();
            $table->boolean('admin')->default(false);
            $table->string("remember_token");

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
