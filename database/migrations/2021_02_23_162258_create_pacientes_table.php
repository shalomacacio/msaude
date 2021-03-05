<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreatePacientesTable.
 */
class CreatePacientesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pacientes', function(Blueprint $table) {
			$table->id();
			//Dados Pessoais
			$table->string('cns', 15)->unique(); 	//cartao nacional de saude 
			$table->string('nome');
            $table->string('nome_mae');
            $table->string('cpf', 11)->unique();
			$table->date('dt_nascimento');
			$table->char('sexo', 1);
			
			//Contato
			$table->string('celular', 11);
            $table->string('email')->nullable();
            
			//Endereço
            $table->string('cep', 8)->nullable();
			$table->string('uf', 2)->nullable();
			$table->string('bairro', 50)->nullable();
			$table->string('rua', 50)->nullable();
			$table->string('num', 8)->nullable();
			$table->string('comp', 8)->nullable();

			//Dados hospitalares
			$table->bigInteger('ubs_id');	//unidade basica de saude
			$table->bigInteger('agen_saude_id')->nullable();	//agente de saude
			
 
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
		Schema::drop('pacientes');
	}
}
