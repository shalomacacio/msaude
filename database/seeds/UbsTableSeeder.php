<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB

class UbsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ubs')->insert([
            'nome_fantasia' => 'UBS NAPOLEÃO LIMA - PSF-ÁREA SECA /PAU SERRADO',
            'cnes'      => 'RUA BELÉM Nº 000',
            'endereco'  => 'NOVO MARANGUAPE ',
            'bairro'    => '2373785'
        ]);

    }
}
