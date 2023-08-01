<?php

use Illuminate\Database\Seeder;
use App\MotivoContato;
class MotivoContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        MotivoContato::create([
            'motivo_contato' => 'Dúvida'
        ]);

        $motivo_elogio = new MotivoContato();
        $motivo_elogio->motivo_contato = 'Elogio';
        $motivo_elogio->save();

        $motivo_reclamacao = new MotivoContato();
        $motivo_reclamacao->fill(['motivo_contato' => 'Reclamação']);
        $motivo_reclamacao->save();
    }
}
