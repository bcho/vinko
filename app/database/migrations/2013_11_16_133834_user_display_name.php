<?php

use Illuminate\Database\Migrations\Migration;

class UserDisplayName extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
    {
        Schema::table('users', function($table) {
            $table->string('display_name', 50)->nullable(true);
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
    {
        Schema::table('users', function($table) {
            $table->dropColumn('display_name');
        });
	}

}
