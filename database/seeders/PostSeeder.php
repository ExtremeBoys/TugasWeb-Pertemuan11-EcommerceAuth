<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::where('role', 'admin')->first();
        $editor = User::where('role', 'editor')->first();

        if ($admin) {
            Post::create([
                'user_id' => $admin->id,
                'title' => 'Pengumuman Promo Akhir Tahun Gadget & Elektronik',
                'slug' => 'pengumuman-promo-akhir-tahun',
                'content' => 'Dapatkan diskon potongan harga spesial untuk pembelian perlengkapan laptop dan periferal komputer di toko kami.',
                'is_published' => true,
            ]);
        }

        if ($editor) {
            Post::create([
                'user_id' => $editor->id,
                'title' => 'Tips Memilih Kursi Kerja Ergonomis untuk Produktivitas',
                'slug' => 'tips-memilih-kursi-kerja-ergonomis',
                'content' => 'Kesehatan postur tubuh saat bekerja sangat ditentukan oleh kualitas sandaran kursi dan tinggi meja yang ideal.',
                'is_published' => true,
            ]);
        }
    }
}
