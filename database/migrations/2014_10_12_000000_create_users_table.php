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
            $table->bigIncrements('id');
            $table->string('firstname')->nullable();
            $table->string('prefix')->nullable();
            $table->string('lastname')->nullable();
            $table->string('studentnr')->nullable();
            $table->string('email')->unique();
            $table->string('password')->default(bcrypt('welcome01'));
            $table->integer('role')->comment('1=admin, 2=teacher, 3=student')->default(3);
            $table->string('github_nickname')->nullable();
            $table->string('github_email')->nullable();
            $table->string('github_access_token')->nullable();
            $table->string('classroom')->nullable();
            $table->integer('status_id')->comment('1=member, 2=logged in')->default(1);
            $table->timestamp('email_verified_at')->nullable();
            // $table->dateTime('logged_in')->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('classroom')->references('name')->on('classrooms');
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
