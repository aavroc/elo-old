<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTypeToUsersRequest extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users_request', function (Blueprint $table) {
            $table->integer('type')->after('status')->comment('1=open, 2=in behandeling, 3=voltooid, 4=trash');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users_request', function (Blueprint $table) {
            $table->dropColumn('type');
        });
    }
}
