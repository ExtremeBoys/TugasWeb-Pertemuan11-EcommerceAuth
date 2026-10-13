<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'id' => 1,
                'name' => 'Laptop & Komputer',
                'slug' => 'laptop-komputer',
                'description' => 'Perangkat komputer jinjing, PC desktop, dan komponen pendukung.'
            ],
            [
                'id' => 2,
                'name' => 'Aksesoris Gadget',
                'slug' => 'aksesoris-gadget',
                'description' => 'Kabel data, charger, adapter, dan penyangga ponsel.'
            ],
            [
                'id' => 3,
                'name' => 'Audio & Musik',
                'slug' => 'audio-musik',
                'description' => 'Headphone, earphone wireless, speaker bluetooth, dan mikrofon.'
            ],
            [
                'id' => 4,
                'name' => 'Perlengkapan Kantor',
                'slug' => 'perlengkapan-kantor',
                'description' => 'Kertas, alat tulis, organizer meja, dan binder dokumen.'
            ],
            [
                'id' => 5,
                'name' => 'Furnitur & Ergonomi',
                'slug' => 'furnitur-ergonomi',
                'description' => 'Kursi ergonomis, meja kerja adjustable, dan sandaran kaki.'
            ]
        ];

        foreach ($categories as $cat) {
            Category::create($cat);
        }
    }
}
