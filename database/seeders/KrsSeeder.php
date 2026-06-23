<?php

namespace Database\Seeders;

use App\Models\Krs;
use Illuminate\Database\Seeder;

class KrsSeeder extends Seeder
{
    /**
     * Seed the KRS data.
     */
    public function run(): void
    {
        $krsData = [
            ['npm' => '2022110001', 'kode_matakuliah' => 'IF201001'],
            ['npm' => '2022110001', 'kode_matakuliah' => 'IF201002'],
            ['npm' => '2022110001', 'kode_matakuliah' => 'IF201003'],
            ['npm' => '2022110001', 'kode_matakuliah' => 'IF201005'],
            ['npm' => '2022110002', 'kode_matakuliah' => 'IF201001'],
            ['npm' => '2022110002', 'kode_matakuliah' => 'IF201004'],
            ['npm' => '2022110002', 'kode_matakuliah' => 'IF201006'],
            ['npm' => '2022110002', 'kode_matakuliah' => 'IF201009'],
            ['npm' => '2022110003', 'kode_matakuliah' => 'IF201002'],
            ['npm' => '2022110003', 'kode_matakuliah' => 'IF201005'],
            ['npm' => '2022110003', 'kode_matakuliah' => 'IF201007'],
            ['npm' => '2022110003', 'kode_matakuliah' => 'IF201010'],
            ['npm' => '2022110004', 'kode_matakuliah' => 'IF201001'],
            ['npm' => '2022110004', 'kode_matakuliah' => 'IF201003'],
            ['npm' => '2022110004', 'kode_matakuliah' => 'IF201006'],
            ['npm' => '2022110005', 'kode_matakuliah' => 'IF201002'],
            ['npm' => '2022110005', 'kode_matakuliah' => 'IF201004'],
            ['npm' => '2022110005', 'kode_matakuliah' => 'IF201008'],
            ['npm' => '2022110006', 'kode_matakuliah' => 'IF201001'],
            ['npm' => '2022110006', 'kode_matakuliah' => 'IF201005'],
            ['npm' => '2022110006', 'kode_matakuliah' => 'IF201007'],
            ['npm' => '2022110007', 'kode_matakuliah' => 'IF201003'],
            ['npm' => '2022110007', 'kode_matakuliah' => 'IF201006'],
            ['npm' => '2022110007', 'kode_matakuliah' => 'IF201009'],
            ['npm' => '2022110008', 'kode_matakuliah' => 'IF201002'],
            ['npm' => '2022110008', 'kode_matakuliah' => 'IF201004'],
            ['npm' => '2022110008', 'kode_matakuliah' => 'IF201010'],
        ];

        foreach ($krsData as $krs) {
            Krs::create($krs);
        }
    }
}
