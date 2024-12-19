<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Petugas;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed data untuk tabel "users"
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Seed data untuk tabel "petugas"
        Petugas::insert([
            [
                'nama' => 'Made Arya',
                'no_telepon' => '08765123477',
                'alamat' => 'Br. Wangbung',
                'status' => 'Aktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Nyoman Edo',
                'no_telepon' => '08765634451',
                'alamat' => 'Br. Manikan',
                'status' => 'Aktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Putu Ngurah',
                'no_telepon' => '087854123456',
                'alamat' => 'Br. Buluh',
                'status' => 'Aktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Wayan Budi',
                'no_telepon' => '08765123477',
                'alamat' => 'Br. Dangin Jalan',
                'status' => 'Aktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Wayan Adi',
                'no_telepon' => '08765451326',
                'alamat' => 'Br. Tegal',
                'status' => 'Aktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Ngurah Adi',
                'no_telepon' => '087987656765',
                'alamat' => 'Br. Manikan',
                'status' => 'Aktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Ketut Garing',
                'no_telepon' => '08765765345',
                'alamat' => 'Br. Tatag',
                'status' => 'Aktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
