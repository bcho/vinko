<?php

use Illuminate\Database\Migrations\Migration;

class UserInit extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
        {
            Schema::create('users', function($table) {
                $table->increments('id');
                $table->string('username', 20);
                $table->string('password', 120);
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
            Schema::drop('users');
	}

}
