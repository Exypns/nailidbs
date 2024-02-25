<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Berita;
use Illuminate\Database\Seeder;

use App\Models\Dokter;
use App\Models\Spesialis;
use App\Models\Jadwal;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Dokter::create([
            'spesialis_id' => 1,
            'jadwal_id' => 1,
            'nama' => 'Nama 1',
            'foto' => 'Test'
        ]);

        Dokter::create([
            'spesialis_id' => 2,
            'jadwal_id' => 2,
            'nama' => 'Nama 2',
            'foto' => 'Test'
        ]);

        Spesialis::create([
            'nama_spesialis' => 'Dokter Bedah'
        ]);

        Spesialis::create([
            'nama_spesialis' => 'Dokter Mata'
        ]);

        Jadwal::create([
            'kamis' => '13.00 - 14.00',
            'jumat' => '14.00 - 16.00'
        ]);
        
        Jadwal::create([
            'senin' => '13.00 - 14.00',
            'selasa' => '13.00 - 14.00',
            'rabu' => '13.00 - 14.00'
        ]);

        Berita::create([
            'judul' => 'Judul Test 1',
            'slug' => 'judul-test-1',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet eaque saepe impedit, excepturi nam, minus quis exercitationem expedita quas reiciendis quos veniam laborum quo sit dolorem repellendus, eius in optio id asperiores! Nisi quos deleniti, recusandae beatae quis quisquam vero, rem officiis doloremque amet quaerat veniam. Magnam cum quaerat odit enim, consectetur minima nesciunt adipisci dignissimos non explicabo pariatur beatae architecto ut dolor ullam sed quasi molestias temporibus? Accusamus quibusdam perspiciatis vitae aperiam sint ipsum officia culpa consectetur nemo. Porro est, architecto earum voluptatibus culpa sit ipsam doloremque impedit dicta? Sed nihil aperiam vitae incidunt cumque corrupti quaerat ullam! Magnam.'
        ]);

        Berita::create([
            'judul' => 'Judul Test 2',
            'slug' => 'judul-test-2',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet eaque saepe impedit, excepturi nam, minus quis exercitationem expedita quas reiciendis quos veniam laborum quo sit dolorem repellendus, eius in optio id asperiores! Nisi quos deleniti, recusandae beatae quis quisquam vero, rem officiis doloremque amet quaerat veniam. Magnam cum quaerat odit enim, consectetur minima nesciunt adipisci dignissimos non explicabo pariatur beatae architecto ut dolor ullam sed quasi molestias temporibus? Accusamus quibusdam perspiciatis vitae aperiam sint ipsum officia culpa consectetur nemo. Porro est, architecto earum voluptatibus culpa sit ipsam doloremque impedit dicta? Sed nihil aperiam vitae incidunt cumque corrupti quaerat ullam! Magnam.'
        ]);
    }
}
