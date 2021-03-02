<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateUbsTable.
 */
class CreateUbsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ubs', function(Blueprint $table) {
            $table->increments('id');
			//Dados 
			$table->string('nome');
			$table->string('unidade');
            $table->string('cnes', 7)->unique();
            $table->string('endereco');
			$table->string('bairro');

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
		Schema::drop('ubs');
	}
}
