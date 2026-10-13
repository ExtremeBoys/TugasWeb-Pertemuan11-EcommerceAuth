# Dokumentasi 5 Query Interaktif Eloquent ORM (Tinker)

Panduan eksekusi perintah interaktif Eloquent ORM melalui Laravel Tinker (`php artisan tinker`).

---

### Query 1: Eager Loading Produk Beserta Kategorinya
Mengambil data produk pertama sekaligus memuat relasi kategorinya untuk membuktikan relasi `belongsTo`.

**Perintah:**
```php
$product = App\Models\Product::with('category')->first();
$product->name;
$product->category->name;
```

**Simulasi Output:**
```
=> App\Models\Product {#5123
     id: 1,
     category_id: 1,
     name: "Asus Vivobook 14 A1404ZA Core i3",
     slug: "asus-vivobook-14-a1404za-core-i3-1",
     price: 7200000,
     stock: 15,
     description: "Laptop harian layar 14 inci FHD anti-glare, RAM 8GB, SSD 512GB NVMe.",
     is_active: 1,
     created_at: "2026-10-13 13:20:00",
     updated_at: "2026-10-13 13:20:00",
     category: App\Models\Category {#5125
       id: 1,
       name: "Laptop & Komputer",
       slug: "laptop-komputer",
       description: "Perangkat komputer jinjing, PC desktop, dan komponen pendukung.",
       created_at: "2026-10-13 13:20:00",
       updated_at: "2026-10-13 13:20:00",
     },
   }
=> "Asus Vivobook 14 A1404ZA Core i3"
=> "Laptop & Komputer"
```

---

### Query 2: Menggunakan Local Scope (Active & InStock)
Menghitung total produk aktif yang memiliki stok lebih dari 0 menggunakan chaining scope `active()` dan `inStock()`.

**Perintah:**
```php
App\Models\Product::active()->inStock()->count();
```

**Simulasi Output:**
```
=> 52
```

---

### Query 3: Relasi User hasMany Post
Mengambil akun pengguna dengan role admin dan menampilkan seluruh daftar artikel postingan yang dimilikinya.

**Perintah:**
```php
$admin = App\Models\User::where('role', 'admin')->first();
$admin->posts()->pluck('title');
```

**Simulasi Output:**
```
=> Illuminate\Support\Collection {#5130
     all: [
       "Pengumuman Promo Akhir Tahun Gadget & Elektronik",
     ],
   }
```

---

### Query 4: Scope Filter Rentang Harga (PriceBetween)
Mengambil daftar nama dan harga produk pada rentang harga Rp 50.000 hingga Rp 300.000.

**Perintah:**
```php
App\Models\Product::priceBetween(50000, 300000)->get(['name', 'price']);
```

**Simulasi Output:**
```
=> Illuminate\Database\Eloquent\Collection {#5135
     all: [
       App\Models\Product {#5136
         name: "Logitech Wireless Mouse M170 Hitam",
         price: 165000,
       },
       App\Models\Product {#5137
         name: "Logitech Pebble M350 Silent Bluetooth",
         price: 285000,
       },
       App\Models\Product {#5138
         name: "Razer DeathAdder Essential Gaming Mouse",
         price: 245000,
       },
       App\Models\Product {#5139
         name: "Anker Powerline III Kabel Type-C ke C 100W",
         price: 145000,
       },
     ],
   }
```

---

### Query 5: Agregasi withCount Relasi Kategori ke Produk
Menghitung jumlah produk di masing-masing kategori menggunakan `withCount('products')`.

**Perintah:**
```php
App\Models\Category::withCount('products')->get(['id', 'name', 'products_count']);
```

**Simulasi Output:**
```
=> Illuminate\Database\Eloquent\Collection {#5142
     all: [
       App\Models\Category {#5143
         id: 1,
         name: "Laptop & Komputer",
         products_count: 10,
       },
       App\Models\Category {#5144
         id: 2,
         name: "Aksesoris Gadget",
         products_count: 20,
       },
       App\Models\Category {#5145
         id: 3,
         name: "Audio & Musik",
         products_count: 7,
       },
       App\Models\Category {#5146
         id: 4,
         name: "Perlengkapan Kantor",
         products_count: 8,
       },
       App\Models\Category {#5147
         id: 5,
         name: "Furnitur & Ergonomi",
         products_count: 7,
       },
     ],
   }
```
