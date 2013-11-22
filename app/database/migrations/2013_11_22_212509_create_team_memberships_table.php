<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamMembershipsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('team_memberships', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('player_id');
            $table->integer('team_id');
            $table->boolean('is_member');
            $table->boolean('is_admin');
            $table->boolean('is_captain');
            $table->softDeletes();
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
		Schema::drop('team_memberships');
	}

}
