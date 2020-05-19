<?php

use App\Dictionary;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dictionary::create([
            'dictionaryType' => 'ReportePreventivo',
            'meaning' => 'Reporte de mantenimiento de tipo preventivo',
            'isEnabled' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    		'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        Dictionary::create([
            'dictionaryType' => 'ReporteCorrectivo',
            'meaning' => 'Reporte de mantenimiento de tipo correctivo',
            'isEnabled' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    		'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        Dictionary::create([
            'dictionaryType' => 'ReportePredictivo',
            'meaning' => 'Reporte de mantenimiento de tipo predictivo',
            'isEnabled' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    		'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        Dictionary::create([
            'dictionaryType' => 'Admin',
            'meaning' => 'Usuario de tipo administrador',
            'isEnabled' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    		'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        Dictionary::create([
            'dictionaryType' => 'User',
            'meaning' => 'Usuario sin privilegios en el sistema',
            'isEnabled' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    		'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
