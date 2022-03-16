<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pegawai')->insert([
            [
            'foto' => 'Amirul Anam.jpg',
            'nama' => 'Amirul Anam',
            'profesi' => 'Customer Service',
            'email' => 'amirul@gmail.com'
            ],
            [
            'foto' => 'Boy Candra.jpg',
            'nama' => 'Boy Candra',
            'profesi' => 'Maintener',
            'email' => 'boy@gmail.com'
            ],
            [
            'foto' => 'Ika Sari.jpg',
            'nama' => 'Ika Sari',
            'profesi' => 'Customer Service',
            'email' => 'ika@gmail.com'
            ],
            [
            'foto' => 'Bima Pratama.jpg',
            'nama' => 'Bima Pratama',
            'profesi' => 'Maintener',
            'email' => 'bima@gmail.com'
            ],
            [
            'foto' => 'Cindy Putri.jpg',
            'nama' => 'Cindy Putri',
            'profesi' => 'Customer Service',
            'email' => 'cindy@gmail.com'
            ],
            [
            'foto' => 'Violanda Dewi.jpg',
            'nama' => 'Violanda Dewi',
            'profesi' => 'Maintener',
            'email' => 'viola@gmail.com'
            ],
            [
            'foto' => 'Sekar Ayu.jpg',
            'nama' => 'Sekar Ayu',
            'profesi' => 'Maintener',
            'email' => 'sekar@gmail.com'
            ]

            ]);
    }
}
