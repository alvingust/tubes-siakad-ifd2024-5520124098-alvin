<?php

namespace Database\Seeders;

use App\Models\Jadwal;
use Illuminate\Database\Seeder;

class JadwalSeeder extends Seeder
{
    /**
     * Seed the jadwal data.
     */
    public function run(): void
    {
        $jadwalData = [
            ['kode_matakuliah' => 'IF201001', 'nidn' => '0101010001', 'kelas' => 'A', 'hari' => 'Senin',    'jam' => '2024-01-01 07:30:00'],
            ['kode_matakuliah' => 'IF201001', 'nidn' => '0102020002', 'kelas' => 'B', 'hari' => 'Selasa',   'jam' => '2024-01-01 09:00:00'],
            ['kode_matakuliah' => 'IF201002', 'nidn' => '0103030003', 'kelas' => 'A', 'hari' => 'Rabu',     'jam' => '2024-01-01 10:30:00'],
            ['kode_matakuliah' => 'IF201003', 'nidn' => '0104040004', 'kelas' => 'B', 'hari' => 'Kamis',    'jam' => '2024-01-01 13:00:00'],
            ['kode_matakuliah' => 'IF201004', 'nidn' => '0105050005', 'kelas' => 'A', 'hari' => 'Jumat',    'jam' => '2024-01-01 07:30:00'],
            ['kode_matakuliah' => 'IF201005', 'nidn' => '0101010001', 'kelas' => 'B', 'hari' => 'Senin',    'jam' => '2024-01-01 13:00:00'],
            ['kode_matakuliah' => 'IF201006', 'nidn' => '0102020002', 'kelas' => 'A', 'hari' => 'Selasa',   'jam' => '2024-01-01 14:30:00'],
            ['kode_matakuliah' => 'IF201007', 'nidn' => '0103030003', 'kelas' => 'B', 'hari' => 'Rabu',     'jam' => '2024-01-01 15:30:00'],
            ['kode_matakuliah' => 'IF201008', 'nidn' => '0104040004', 'kelas' => 'A', 'hari' => 'Kamis',    'jam' => '2024-01-01 09:00:00'],
            ['kode_matakuliah' => 'IF201009', 'nidn' => '0105050005', 'kelas' => 'B', 'hari' => 'Jumat',    'jam' => '2024-01-01 10:30:00'],
            ['kode_matakuliah' => 'IF201010', 'nidn' => '0101010001', 'kelas' => 'A', 'hari' => 'Senin',    'jam' => '2024-01-01 10:30:00'],
        ];

        foreach ($jadwalData as $j) {
            Jadwal::create($j);
        }
    }
}
