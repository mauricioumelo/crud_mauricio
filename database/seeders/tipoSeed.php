<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\tipoDocument;

class tipoSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(tipoDocument $tipo)
    {
        $tipo-> create([
            'nome_tipo' => 'Ata'
        ]);
        $tipo-> create([
            'nome_tipo' => 'Relatório'
        ]);
        $tipo-> create([
            'nome_tipo' => 'Contrato'
        ]);
        $tipo-> create([
            'nome_tipo' => 'Recibo'
        ]);
        $tipo-> create([
            'nome_tipo' => 'Formulario'
        ]);
        $tipo-> create([
            'nome_tipo' => 'Edital'
        ]);
    }
}
