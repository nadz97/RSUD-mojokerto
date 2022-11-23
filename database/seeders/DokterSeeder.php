<?php

namespace Database\Seeders;

use App\Models\Dokter;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            "name" => "dr. Melisa Aziz, Sp.JP",
            "email" => "melisa@gmail.com",
            "password" => bcrypt("melisa")
        ]);

        $dokter = Dokter::create([
            "user_id" => $user->id,
            "nama_lengkap" => "Melisa Aziz",
            "str" => "123412341234",
            "jenis" => "Dokter Gigi Spesialis Penyakit Mulut",
            "profil" => "drg. Vita Darmawati, M.Kes, Sp.PM adalah dokter spesialis gigi",
            "alamat" => "Mojokerto",
            "photo" => "1.jpg",
        ]);

        $user = User::create([
            "name" => "dr. Teguh Wahyu Purnomo, Sp.JP (K)",
            "email" => "teguh@gmail.com",
            "password" => bcrypt("teguh")
        ]);


        $dokter = Dokter::create([
            "user_id" => $user->id,
            "nama_lengkap" => "Teguh Wahyu Purnomo",
            "str" => "234523452345",
            "jenis" => "Dokter Jantung",
            "profil" => "dr. Teguh Wahyu Purnomo, Sp.JP (K) adalah dokter spesialis jantung",
            "alamat" => "Mojokerto",
            "photo" => "2.jpg",
        ]);
    }
}
