<?php

namespace Database\Seeders;

use App\Models\Buku;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create('id_ID');
        for($i = 1; $i <= 50; $i++){
 
    	  // insert data ke table pegawai menggunakan Faker
          DB::table('bukus')->insert([
    		'judul' => $faker->sentence,
    		'pengarang' => $faker->name,
    		'tanggal_publikasi' => $faker->date,
       	]);
 
        }
    }
}
