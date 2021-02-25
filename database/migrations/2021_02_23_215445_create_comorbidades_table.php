<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateComorbidadesTable.
 */
class CreateComorbidadesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comorbidades', function(Blueprint $table) {
            $table->increments('id');
			$table->string('descricao');
			$table->integer('campanha_id');
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
		Schema::drop('comorbidades');
	}
}
