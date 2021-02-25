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
			$table->string('cns', 7)->unique(); 	//cartao nacional de saude 
			$table->string('nome');
            $table->string('nome_mae');
            $table->string('cpf', 11)->unique();
			$table->date('dt_nascimento');
			$table->char('sexo', 1);
			
			//Contato
			$table->string('celular', 11);
            $table->string('email')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            
			//Endereço
            $table->string('cep', 8);
			$table->string('uf', 2);
			$table->string('bairro', 50);
			$table->string('rua', 50);
			$table->string('num', 8);
			$table->string('comp', 8);

			//Dados hospitalares
			$table->bigInteger('ubs_id'); 		 	//unidade basica de saude
			$table->bigInteger('agen_saude_id');	//agente de saude
			
 
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
