# UMKM Desa Cimulang (Laravel)

## Laravel

-   Instalasi Laravel
    -   copy file .env.local ke .env
    -   composer install
    -   npm install
    -   php artisan migrate
-   Jalankan Laravel
    -   php artisan serve (XAMPP)
    -   npm run dev

# Catatan Pre-release

-   logonya besarin{ok}
-   views
    -   welcome
        -   Youtube komentarin dulu {ok}
    -   umkm
        -   index
            -   kasih header/hero sebelum list umkm desa cimulang {ok}
        -   show
            -   perbaiki view berdasarkan kontroler {ok}
    -   dashboard
        -   Menampilkan jumlah umkm dll. (Referensi: [Stats](https://www.tailbits.com/components/stats)) {ok}
    -   admin/umkm
        -   create
            -   halaman buat umkm dibagusin lagi{OK}
        -   index
            -   Perbaiki header tambah UMKM{OK}
        -   show
            -   kasih header{OK}
            -   kasih list produk dari UMKM tersebut{OK}
            -   bisa edit dan hapus produk{OK}
        -   edit
            -   halaman edit umkm ambil berdasarkan halaman buat umkm{OK}
        -   produk
            -   index
                -   menampilkan daftar produk dari umkm{OK}
            -   create
                -   membuat produk baru (nama produk, description produk, jumlah produk, harga produk, gambar produk){OK}

---
- Model
  - UMKM
    - name
    - description
    - whatsapps
    - thumbnail
  - Product
    - name
    - description
    - price
    - stock
    - umkm_id
    - thumbnail

---
Jalankan perintah untuk menghapus dan membuat ulang database:
- php artisan migrate:fresh
Testing User tgl 9
- judul umkm di fitur lihat umkm terlihat tidak rapi
- didalam fitur edit masih meminta gambar umkm dan gambar produk