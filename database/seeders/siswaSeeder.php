<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class siswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('siswa')->insert([
            'NIPD'=>'123456',
            'nama'=>'maman',
            'jenis_kelamin' =>'laki laki',
            'kelas' =>'XI',
            'alamat'=>'jalan merdeka',

        ]);
    }
}
