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
            -   halaman buat umkm dibagusin lagi
        -   index
            -   Perbaiki header tambah UMKM
        -   show
            -   kasih header
            -   kasih list produk dari UMKM tersebut
            -   bisa edit dan hapus produk
        -   edit
            -   halaman edit umkm ambil berdasarkan halaman buat umkm
        -   produk
            -   index
                -   menampilkan daftar produk dari umkm
            -   create
                -   membuat produk baru (nama produk, deskripsi produk, jumlah produk, harga produk, gambar produk)
