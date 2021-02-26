<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateCampanhaAgendamentosTable.
 */
class CreateCampanhaAgendamentosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('campanha_agendamentos', function(Blueprint $table) {
            $table->increments('id');
			$table->integer('paciente_id');
			$table->integer('campanha_id');
			$table->integer('ubs_id');
			$table->timestamp('dh_agendamento');
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
		Schema::drop('campanha_agendamentos');
	}
}
