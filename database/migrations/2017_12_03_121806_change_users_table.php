<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
	        $table->renameColumn('name', 'lastname');
	        $table->string('firstname');
	        $table->string('zipcode');
	        $table->integer('prefecturesId')->references('id')->on('prefectures');
	        $table->string('address');
	        $table->string('phone');
	        $table->boolean('invalid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
