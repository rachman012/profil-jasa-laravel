<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('portfolios')->insert([
            [
                'title' => 'E-Raport PAUD',
                'description' => 'Sistem informasi e-Raport digital berbasis web.',
                'image' => 'images/portfolio/eraport.jpg',
                'url' => '#',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Website Absensi Karyawan',
                'description' => 'Website untuk pengelolaan absensi karyawan.',
                'image' => 'images/portfolio/absensi.jpg',
                'url' => '#',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Website Company Profile',
                'description' => 'Website profil profesional untuk perusahaan atau organisasi.',
                'image' => 'images/portfolio/company-profile.jpg',
                'url' => '#',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
