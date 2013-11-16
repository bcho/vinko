<?php

use Illuminate\Database\Migrations\Migration;

class SiteInfo extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
    {
        Schema::create('site', function($table) {
            $table->increments('id');

            $table->string('name', 50);

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
        Schema::drop('site');
	}

}
