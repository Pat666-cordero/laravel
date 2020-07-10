<?php

use Illuminate\Database\Seeder;
use App\Equipo;
use App\Disciplina;

class EquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $disciplinaId = Disciplina::where('nombre', 'Futbol 8')->value('id');
        Equipo::create([
            'nombre' => 'Anonymous',
            'descripcion' => 'El poder del Conocimiento',
            'disciplina_id' => $disciplinaId,
            'image' => 'https://cdn0.iconfinder.com/data/icons/social-flat-rounded-rects/512/anonymous-512.png'
        ]);
        Equipo::create([
            'nombre' => 'Donatoss',
            'descripcion' => 'Creado Delicias',
            'disciplina_id' => $disciplinaId,
            'image' => 'https://cdn2.iconfinder.com/data/icons/tasty-bites-icon-set/512/donuts.png'
        ]);
        Equipo::create([
            'nombre' => 'Monkycoins',
            'descripcion' => 'Pensando en Grande',
            'disciplina_id' => $disciplinaId,
            'image' => 'https://cdn3.iconfinder.com/data/icons/virus-transmission-color/48/Monkey_Virus-512.png'
        ]);
        Equipo::create([
            'nombre' => 'Cuentaseguro',
            'descripcion' => 'Buscamos tu Seguridad',
            'disciplina_id' => $disciplinaId,
            'image' => 'https://cdn3.iconfinder.com/data/icons/finance-152/64/6-512.png'
        ]);
        Equipo::create([
            'nombre' => 'Designerstyle',
            'descripcion' => 'Ideas hechas Arte',
            'disciplina_id' => $disciplinaId,
            'image' => 'https://cdn4.iconfinder.com/data/icons/creative-process-16/512/Logo_Design-512.png'
        ]);
    }
}
