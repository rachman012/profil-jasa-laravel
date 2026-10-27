<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('services')->insert([
            [
                'name' => 'Website Company Profile',
                'slug' => 'website-company-profile',
                'description' => 'Website profesional untuk profil perusahaan, organisasi, sekolah, atau usaha.',
                'price' => 1500000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Website Toko Online',
                'slug' => 'website-toko-online',
                'description' => 'Website e-commerce dengan katalog produk, keranjang, dan halaman pemesanan.',
                'price' => 2500000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sistem Informasi',
                'slug' => 'sistem-informasi',
                'description' => 'Pengembangan sistem informasi berbasis web sesuai kebutuhan bisnis atau institusi.',
                'price' => 3000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Website E-Raport',
                'slug' => 'website-e-raport',
                'description' => 'Sistem e-Raport berbasis web untuk pengelolaan data siswa, guru, nilai, dan laporan.',
                'price' => 3500000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
