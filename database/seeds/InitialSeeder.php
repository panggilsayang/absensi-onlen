<?php

use Illuminate\Database\Seeder;
use App\Master\Siswa;

class InitialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswas')->insert([
            'nisn' => '41143033',
            'nis' => '41143033',
            'nama' => 'Demen Sinden',
            'jk' => 'L',
            'is_active' => false
        ]);
        Siswa::create([
            'nisn' => '41143034',
            'nis' => '41143034',
            'nama' => 'Demen Sinden 2',
            'jk' => 'P',
        ]);
        $siswa = new Siswa();
        $siswa->nisn = '41143035';
        $siswa->nis = '41143035';
        $siswa->nama = 'Demen Sinden 3';
        $siswa->jk = 'L';
        $siswa->save();
    }
}
