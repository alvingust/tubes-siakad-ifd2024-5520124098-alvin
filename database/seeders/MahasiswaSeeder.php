<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class MahasiswaSeeder extends Seeder
{
    /**
     * Seed the mahasiswa data.
     */
    public function run(): void
    {
        $mahasiswaData = [
            ['npm' => '2022110001', 'nidn' => '0101010001', 'nama' => 'Alvin Gustiara',   'email' => 'alvin.gustiara@unsur.ac.id'],
            ['npm' => '2022110002', 'nidn' => '0101010001', 'nama' => 'Siti Nur Azizah',           'email' => 'siti.azizah@unsur.ac.id'],
            ['npm' => '2022110003', 'nidn' => '0102020002', 'nama' => 'Rendra Hanandra',          'email' => 'rendra.hanandra@unsur.ac.id'],
            ['npm' => '2022110004', 'nidn' => '0102020002', 'nama' => 'Intan Permata Sari',      'email' => 'intan.sari@unsur.ac.id'],
            ['npm' => '2022110005', 'nidn' => '0103030003', 'nama' => 'Ade Suganda',              'email' => 'ade.suganda@unsur.ac.id'],
            ['npm' => '2022110006', 'nidn' => '0103030003', 'nama' => 'Wulan Maulida Azhari',   'email' => 'wulan.azhari@unsur.ac.id'],
            ['npm' => '2022110007', 'nidn' => '0104040004', 'nama' => 'Fajar Kurnia Rahimullah',  'email' => 'fajar.rahimullah@unsur.ac.id'],
            ['npm' => '2022110008', 'nidn' => '0104040004', 'nama' => 'Maya Kusuma Wardhani',     'email' => 'maya.wardhani@unsur.ac.id'],
        ];

        foreach ($mahasiswaData as $mhs) {
            $user = User::create([
                'name'     => $mhs['nama'],
                'email'    => $mhs['email'],
                'password' => Hash::make('123'),
                'role'     => 'mahasiswa',
            ]);

            Mahasiswa::create([
                'npm'     => $mhs['npm'],
                'nidn'    => $mhs['nidn'],
                'nama'    => $mhs['nama'],
                'user_id' => $user->id,
            ]);
        }
    }
}
