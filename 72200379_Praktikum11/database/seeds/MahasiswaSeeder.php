<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 30; $i++)
        {
            DB::table('mahasiswa')->insert([
                'nim' => 72200000 +$i,
                'nama' => $faker->name(),
                'gender' => $faker->jenisk(),
                'jurusan' => $faker->major(),
                'bdg_minat' => $faker->interest()
            ]);
        }
    }
}
