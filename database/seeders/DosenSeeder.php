<?php

namespace Database\Seeders;

use App\Models\Dosen;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DosenSeeder extends Seeder
{
    /**
     * Seed the dosen data.
     */
    public function run(): void
    {
        $dosenUsers = [
            ['name' => 'Dr. Imam Gunawan, S.T, M.Tech',        'email' => 'imam@unsur.ac.id'],
            ['name' => 'Prof. Siti Nurhaliza, S.Kom, M.Cs',    'email' => 'siti.nurhaliza@unsur.ac.id'],
            ['name' => 'Drs. Ahmad Suryanto, M.Kom',            'email' => 'ahmad.suryanto@unsur.ac.id'],
            ['name' => 'Ir. Bambang Setiawan, Ph.D',            'email' => 'bambang.setiawan@unsur.ac.id'],
            ['name' => 'Dr. Rina Wulandari, S.Kom, M.Tech',    'email' => 'rina.wulandari@unsur.ac.id'],
        ];

        $dosenNIDN = ['0101010001', '0102020002', '0103030003', '0104040004', '0105050005'];

        foreach ($dosenUsers as $i => $du) {
            $user = User::create([
                'name'     => $du['name'],
                'email'    => $du['email'],
                'password' => Hash::make('123'),
                'role'     => 'admin',
            ]);

            Dosen::create([
                'nidn'    => $dosenNIDN[$i],
                'nama'    => $du['name'],
                'user_id' => $user->id,
            ]);
        }
    }
}
