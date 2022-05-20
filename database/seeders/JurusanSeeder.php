<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jurusan;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jurusan::create([
            'jurusan'=>'Teknik Informatika'
          ]);
          Jurusan::create([
            'jurusan'=>'Sistem Informasi'
          ]);
          Jurusan::create([
            'jurusan'=>'Perawat'
          ]);
          Jurusan::create([
            'jurusan'=>'Akuntansi'
          ]);
          Jurusan::create([
            'jurusan'=>'Manajemen'
          ]);
          Jurusan::create([
            'jurusan'=>'Keguruan'
          ]);
          Jurusan::create([
            'jurusan'=>'Kependetaan'
          ]);
          Jurusan::create([
            'jurusan'=>'Biologi'
          ]);
          Jurusan::create([
            'jurusan'=>'Farmasi'
          ]);
    }
}
