<?php

use Illuminate\Database\Seeder;
use App\Desafio;
use App\Disciplina;
use App\Equipo;

class DesafioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $disciplina1 = Disciplina::where('nombre', 'Futbol 8')->value('id');
        $invitado1 = Equipo::where('nombre', 'Anonymous')->value('id');
        $retador1 = Equipo::where('nombre', 'Monkycoins')->value('id');
        Desafio::create([
            'disciplina_id' => $disciplina1,
            'invitado_id' => $invitado1,
            'retador_id' => $retador1,
            'invitado_puntaje' => 1,
            'retador_puntaje' => 1,
            'ganador' => '',
            'parent_id' => 1,
            'fecha' => new DateTime,
            'grupo' => 'A',
        ]);
        Desafio::create([
            'disciplina_id' => $disciplina1,
            'invitado_id' => $invitado1,
            'retador_id' => $retador1,
            'invitado_puntaje' => 1,
            'retador_puntaje' => 1,
            'ganador' => '',
            'parent_id' => 1,
            'fecha' => new DateTime,
            'grupo' => 'B',
        ]);
    }
}
