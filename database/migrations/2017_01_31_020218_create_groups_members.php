<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupsMembersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('groups_members', function(Blueprint $table)
		{
		  $table->increments('id');
		  $table->integer('group_id')->index();
		  $table->integer('user_id')->index();
		  $table->boolean('is_admin');
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
		Schema::drop('groups_members');
	}

}
