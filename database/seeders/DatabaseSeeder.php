<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('test@example.com'),
        ]);

        'DB'::table('kategori')->insert([
            'nama_kategori' => 'Nasional'
        ]);
        
        'DB'::table('berita')->insert([
            'judul_berita' => 'Lorem ipsum',
            'isi_berita' => 'Lorem ipsum',
            'gambar_berita' => 'lorem.jpg',
            'id_kategori' => 1
        ]);
    }
}
