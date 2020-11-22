<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // menggunakan faker
        $faker = Faker::create('id_ID');

        for ($i=0; $i < 50; $i++) { 
        	
        	// insert data ke table pegawai menggunakan faker
        	DB::table('pegawai')->insert([
        		'nama_pegawai' => $faker->name,
        		'jabatan'	   => $faker->jobTitle,
        		'umur'		   => $faker->numberBetween(25,40),
        		'alamat'	   => $faker->address
        	]);

        }

    }
}
