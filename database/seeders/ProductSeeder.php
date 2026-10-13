<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [1, 'Asus Vivobook 14 A1404ZA Core i3', 7200000, 15, 'Laptop harian layar 14 inci FHD anti-glare, RAM 8GB, SSD 512GB NVMe.'],
            [1, 'Lenovo IdeaPad Slim 3 14IAU7 Core i3', 6999000, 12, 'Laptop ringan untuk komputasi mahasiswa dan kantor, SSD 512GB.'],
            [1, 'HP 14s-dq3111TU Intel Celeron N4500', 4450000, 20, 'Laptop hemat daya untuk pengetikan dan browsing harian.'],
            [1, 'Acer Aspire 3 Slim A314 Ryzen 3', 6150000, 10, 'Laptop ringkas prosesor AMD Ryzen 3 7320U grafis Radeon 610M.'],
            [1, 'Apple MacBook Air M1 256GB Space Grey', 11999000, 8, 'Ultrabook Apple dengan baterai tahan 18 jam dan performa chip Apple M1.'],
            [1, 'Dell Inspiron 15 3511 Core i5 1135G7', 8850000, 7, 'Laptop layar luas 15.6 inci dengan keyboard numerik untuk administrasi.'],
            [1, 'MSI Modern 14 C12MO Core i5 1235U', 7899000, 9, 'Laptop tipis berbobot 1.4kg cocok untuk profesional muda.'],
            [1, 'Asus ROG Zephyrus G14 Ryzen 7', 23500000, 4, 'Laptop gaming portabel layar 14 inci QHD 120Hz RTX 4060.'],
            [1, 'Lenovo ThinkPad T14 Gen 3 Core i5', 18200000, 5, 'Laptop kelas bisnis dengan durabilitas militer dan keyboard legendaris.'],
            [1, 'Axioo Hype 5 AMD Ryzen 5 5500U', 5499000, 18, 'Laptop lokal bertenaga prosesor 6-core dengan harga terjangkau.'],

            [2, 'Logitech Wireless Mouse M170 Hitam', 165000, 45, 'Mouse nirkabel 2.4GHz plug and play baterai tahan hingga 12 bulan.'],
            [2, 'Logitech Pebble M350 Silent Bluetooth', 285000, 30, 'Mouse senyap bentuk slim portabel koneksi dual Bluetooth dan receiver.'],
            [2, 'Razer DeathAdder Essential Gaming Mouse', 245000, 25, 'Mouse kabel sensor optik 6400 DPI dengan 5 tombol yang dapat diprogram.'],
            [2, 'Keyboard Mechanical Keychron K2 V2 Wireless', 1350000, 10, 'Keyboard mekanikal 75% switch Gateron Brown kompatibel Mac dan Windows.'],
            [2, 'Logitech K380 Multi-Device Bluetooth', 420000, 35, 'Keyboard nirkabel ringan dapat dihubungkan ke 3 perangkat sekaligus.'],
            [2, 'Rexus Daxa M71 Pro Mechanical Keyboard', 725000, 15, 'Keyboard hotswappable RGB layout 71 tombol switch Outemu.'],
            [2, 'Mousepad Gaming Rexus Kvlar T10 Speed', 45000, 60, 'Mousepad tekstur halus pinggiran jahit obras ukuran 300x250mm.'],
            [2, 'Webcam Logitech C920 Pro HD 1080p', 980000, 14, 'Kamera web resolusi full HD autofocus mikrofon stereo ganda.'],
            [2, 'Headset Gaming SteelSeries Arctis 1', 650000, 16, 'Headset kabel jack 3.5mm mikrofon peredam bising ClearCast.'],
            [2, 'Stand Laptop Aluminium Lipat Ergonomis', 95000, 50, 'Penyangga laptop berbahan paduan aluminium dengan 6 tingkat kemiringan.'],
            [2, 'Baseus 65W GaN Charger 3 Port Type-C', 310000, 28, 'Adaptor charger cepat teknologi GaN output 2 Type-C dan 1 USB-A.'],
            [2, 'Anker Powerline III Kabel Type-C ke C 100W', 145000, 40, 'Kabel pengisian daya cepat transfer data 480Mbps panjang 1.8 meter.'],
            [2, 'Ugreen USB-C Hub 6-in-1 HDMI 4K', 299000, 22, 'Dongle multifungsi port HDMI, 3 port USB 3.0, slot SD dan TF card.'],
            [2, 'Flashdisk Sandisk Ultra Dual Luxe 128GB', 175000, 38, 'Penyimpanan portabel konektor ganda USB Type-C dan Type-A logam.'],
            [2, 'Harddisk Eksternal WD Elements 1TB USB 3.0', 799000, 20, 'Penyimpanan cadangan file kapasitas 1TB kecepatan USB 3.0.'],
            [2, 'SSD Eksternal Samsung Portable T7 500GB', 1250000, 11, 'SSD eksternal kecepatan baca tulis hingga 1050MB/s tahan guncangan.'],
            [2, 'Powerbank Xiaomi 20000mAh 18W Fast Charge', 249000, 30, 'Baterai cadangan kapasitas besar port input Type-C dan Micro USB.'],
            [2, 'Screenbar Baseus i-Wok Lampu Monitor', 280000, 18, 'Lampu gantung monitor pelindung mata tanpa silau di layar.'],
            [2, 'Kabel HDMI 2.0 Vention 4K 60Hz 2 Meter', 55000, 55, 'Kabel transmisi audio video kualitas tinggi jalinan nilon kuat.'],
            [2, 'Converter Type-C to VGA dan HDMI Ugreen', 185000, 25, 'Adapter presentasi layar ganda proyektor dan monitor eksternal.'],

            [3, 'Sony WH-1000XM4 Wireless Noise Cancelling', 3799000, 6, 'Headphone over-ear peredam bising terbaik dengan codec LDAC.'],
            [3, 'Apple AirPods Pro Gen 2 MagSafe USB-C', 3899000, 9, 'Earphone nirkabel fitur active noise cancellation dan spatial audio.'],
            [3, 'Anker Soundcore Life P2 Mini TWS', 230000, 40, 'Earphone bluetooth 5.2 driver 10mm dengan 3 mode equalizer.'],
            [3, 'Speaker Bluetooth Portable JBL GO 3', 530000, 25, 'Speaker mini tahan air dan debu IP67 daya tahan baterai 5 jam.'],
            [3, 'Speaker Aktif Monitor Edifier R1280T Kayu', 1150000, 8, 'Speaker rak buku stereo daya 42W RMS dengan remote kontrol nirkabel.'],
            [3, 'Mikrofon USB Fifine K669B Condenser', 375000, 16, 'Mikrofon rekaman podcast dan streaming tripod stand terpasang.'],
            [3, 'Headphone Audio-Technica ATH-M20x', 675000, 12, 'Headphone monitoring audio profesional kabel lurus panjang 3 meter.'],

            [4, 'Kertas HVS SiDU A4 80gr 1 Rim 500 Lembar', 48500, 80, 'Kertas cetak dokumen resmi ketebalan 80 gram derajat putih tinggi.'],
            [4, 'Kertas HVS PaperOne F4 75gr 1 Rim', 52000, 75, 'Kertas ukuran folio teknologi ProDigi bebas macet saat print.'],
            [4, 'Ballpoint Gel Pilot G2 0.5 Hitam 1 Lusin', 195000, 30, 'Pena tinta gel isi ulang penulisan halus ketebalan mata pena 0.5mm.'],
            [4, 'Binder Bantex B5 26 Ring Warna Biru', 45000, 50, 'Map binder catatan kuliah kapasitas 25mm bahan ramah lingkungan.'],
            [4, 'Stapler Max HD-10 dan 1 Kotak Isi No.10', 25000, 65, 'Alat jepret kertas buatan Jepang kapasitas stapel hingga 20 lembar.'],
            [4, 'Sticky Notes Post-it 3M Kuning 3x3 Inci', 14000, 90, 'Kertas memo berperekat kuat tidak meninggalkan bekas saat dilepas.'],
            [4, 'Pemotong Kertas Joyko Paper Cutter A4 Besi', 185000, 15, 'Mesin potong kertas pisau tuas baja presisi garis pemandu ukuran.'],
            [4, 'Papan Tulis Whiteboard Gantung 60x90cm', 120000, 20, 'Papan tulis spidol permukaan magnetik bingkai aluminium kokoh.'],

            [5, 'Kursi Kantor Ergonomis Pexio Jervis Grey', 1450000, 10, 'Kursi kerja sandaran jaring hidrolik gaslift lumbar support adjustable.'],
            [5, 'Kursi Kerja Jaring Sihoo M57 Ergonomis', 2650000, 6, 'Kursi ergonomis sandaran kepala dan tangan 3D material full mesh adem.'],
            [5, 'Meja Kantor Kayu Minimalis 120x60cm', 680000, 14, 'Meja kerja rangka besi hollow papan partikel laminasi melamine.'],
            [5, 'Meja Standing Desk Manual Hidrolik 140cm', 2350000, 5, 'Meja kerja adjustable ketinggian fleksibel posisi duduk dan berdiri.'],
            [5, 'Rak Meja Monitor Kayu Solid 2 Tingkat', 85000, 35, 'Stand monitor komputer dengan laci kecil penyimpanan perlengkapan meja.'],
            [5, 'Kursi Putar Kerja Indachi D-300 Kaki Chrome', 550000, 18, 'Kursi sekretaris busa tebal tanpa lengan roda nilon fleksibel.'],
            [5, 'Sandaran Kaki Bawah Meja Ergonomic Footrest', 125000, 28, 'Alas pijakan kaki relaksasi posisi duduk mencegah pegal saat bekerja.']
        ];

        foreach ($products as $index => $item) {
            $slugBase = Str::slug($item[1]);
            $uniqueSlug = $slugBase . '-' . ($index + 1);

            Product::create([
                'category_id' => $item[0],
                'name' => $item[1],
                'slug' => $uniqueSlug,
                'price' => $item[2],
                'stock' => $item[3],
                'description' => $item[4],
                'is_active' => true,
            ]);
        }
    }
}
