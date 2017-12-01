<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estados')->insert([
            'nombre' => 'Regular',
            'descripcion' => 'Estado de bien en condiciones normales',            
        ]);
        DB::table('estados')->insert([
            'nombre' => 'Malo',
            'descripcion' => 'Estado de bien en condiciones malas',            
        ]);
        DB::table('estados')->insert([
            'nombre' => 'Bueno',
            'descripcion' => 'Estado de bien en buenas condiciones',            
        ]);
        DB::table('tipos')->insert([
            'nombre' => 'Planos',
            'descripcion' => '',            
        ]);
        DB::table('tipos')->insert([
            'nombre' => 'Pintura',
            'descripcion' => '',            
        ]);
        DB::table('tipos')->insert([
            'nombre' => 'Orfebreria',
            'descripcion' => '',            
        ]);
        DB::table('tipos')->insert([
            'nombre' => 'Ceramica',
            'descripcion' => '',            
        ]);
        DB::table('descriptores')->insert([
            'nombre' => 'Arte religioso',
            'descripcion' => '',            
        ]);
        DB::table('descriptores')->insert([
            'nombre' => 'Escultura',
            'descripcion' => '',            
        ]);
        DB::table('descriptores')->insert([
            'nombre' => 'Arte precolombino',
            'descripcion' => '',            
        ]);
        DB::table('materiales')->insert([
            'nombre' => 'Plata',
            'descripcion' => '',            
        ]);
        DB::table('materiales')->insert([
            'nombre' => 'Oro',
            'descripcion' => '',            
        ]);
        DB::table('materiales')->insert([
            'nombre' => 'Papel',
            'descripcion' => '',            
        ]);
        DB::table('materiales')->insert([
            'nombre' => 'Algodon',
            'descripcion' => '',            
        ]);
        DB::table('materiales')->insert([
            'nombre' => 'Terciopelo',
            'descripcion' => '',            
        ]);
        DB::table('bienes')->insert([
            'tipo_id' => '1',
            'autor'=>'Juan perez',
            'nombre'=>'Cuadro',
            'lugar'=>'Rawson',
            'fecha'=>'1994-03-02',
            'tomo'=>'2',
            'folio'=>'3',
            'paginas'=>'703',
            'legajo'=>'2',
            'material_id'=>'3',
            'completo'=>'si',
            'procedencia'=>'America latina',
            'estado_id'=>'3',
            'foto'=>'DBx94BWi3DfzpVvd5ExlBGc2d6BUoKmFZiK3slUO.png',
            'fotografo'=>'pepe argento',
            'descripcion'=>'descripcion de este bien',
            'observacion'=>'observacion de este bien'            
        ]);
        DB::table('bienes')->insert([
            'tipo_id' => '2',
            'autor'=>'Homero Simpson',
            'nombre'=>'Estatua',
            'lugar'=>'Trelew',
            'fecha'=>'1992-05-07',
            'tomo'=>'9',
            'folio'=>'16',
            'paginas'=>'8703',
            'legajo'=>'4',
            'material_id'=>'2',
            'completo'=>'si',
            'procedencia'=>'Europa',
            'estado_id'=>'2',
            'foto'=>'DBx94BWi3DfzpVvd5ExlBGc2d6BUoKmFZiK3slUO.png',
            'fotografo'=>'Dardo fuseneco',
            'descripcion'=>'descripcion de este bien',
            'observacion'=>'observacion de este bien'            
        ]);
    }
}
