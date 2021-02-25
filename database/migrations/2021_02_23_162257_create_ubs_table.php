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
			$table->string('nome_fantazia');
            $table->string('razao_social');
            $table->string('cnes', 7)->unique();

			//Endereço
            $table->string('cep', 8);
			$table->string('uf', 2);
			$table->string('bairro', 50);
			$table->string('rua', 50);
			$table->string('num', 8);
			$table->string('comp', 8);

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
