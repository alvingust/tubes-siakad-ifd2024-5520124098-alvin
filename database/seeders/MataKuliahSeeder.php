<?php

namespace Database\Seeders;

use App\Models\MataKuliah;
use Illuminate\Database\Seeder;

class MataKuliahSeeder extends Seeder
{
    /**
     * Seed the mata kuliah data.
     */
    public function run(): void
    {
        $mataKuliah = [
            ['kode_matakuliah' => 'IF201001', 'nama_matakuliah' => 'Pemrograman Dasar',                     'sks' => 3],
            ['kode_matakuliah' => 'IF201002', 'nama_matakuliah' => 'Basis Data Relasional',                 'sks' => 3],
            ['kode_matakuliah' => 'IF201003', 'nama_matakuliah' => 'Pemrograman Web Lanjutan',              'sks' => 3],
            ['kode_matakuliah' => 'IF201004', 'nama_matakuliah' => 'Administrasi Jaringan',                 'sks' => 3],
            ['kode_matakuliah' => 'IF201005', 'nama_matakuliah' => 'Sistem Operasi Linux',                  'sks' => 2],
            ['kode_matakuliah' => 'IF201006', 'nama_matakuliah' => 'Matematika Diskret',                    'sks' => 3],
            ['kode_matakuliah' => 'IF201007', 'nama_matakuliah' => 'Struktur Data dan Algoritma',          'sks' => 3],
            ['kode_matakuliah' => 'IF201008', 'nama_matakuliah' => 'Rekayasa Perangkat Lunak',             'sks' => 3],
            ['kode_matakuliah' => 'IF201009', 'nama_matakuliah' => 'Keamanan Informasi',                    'sks' => 3],
            ['kode_matakuliah' => 'IF201010', 'nama_matakuliah' => 'Mobile Development',                    'sks' => 3],
        ];

        foreach ($mataKuliah as $mk) {
            MataKuliah::create($mk);
        }
    }
}
