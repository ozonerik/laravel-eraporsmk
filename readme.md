<p align="center">
<img src="https://lh3.googleusercontent.com/ibTn7ItH55oXEts3qN4nAe5jghMMEbqYXJ2ah3gNzqnydUtuVFInR2Y39PzVwokSmf4Cst9_0ZBpZ4CeskRDWpVu5pIRgPyev9W2objfQQFpDmgkZ6H5TdonhNVrL5NNRgjMwWwHUmysRAP3FsOvv3iWHGjp8rjObZ_vNJH9WGFHVCeKDkA9oiqCASQTFcp1C8ZhQO5aK-VCrTKEC0ne5ZLf7Xux_6gP6AgsBln4txYt6XLrSCJ5UxxJWoxCz4w4SFeA-uA4qc-jCDvZV__90swJUSYAEy5QfgWq7nv3FeOqwpgPdZeHrTMXoRMgKvlxwTIxE2aHxzU9FtFbNXEEgJUdTn7h-i-Gsg72kkniJ9xmQwft6JtFirPPM0_1kMINqe3Km3VV_gV4Y1JfDiLK_VCGKv7Pqs2nVJC2fP2nHDxqxWT2VmZGYo7Ky1DX3VfuaD-Xuz5h_2CMXyTFoQ07r4SftTIRzQy5jPdTVbpx84g_2xTDczAKJORUvxIRejNxDjADtMyjpAwwyDlTz6eze4W5SLUj6ATRD1BO9pfdJWz6qILf-OaNPsHKOWiCN0G3no6rAqQ72_2G1ITLK8RB8rtyiRIw6xO95cMkcx_rLtCD8GNYY3_xGiDsgcA77NNHIRKcOmwLFBgLnx26g77kiLwpQo5LyRm1H9IxGPfU82JRpMjb8lFaDGeBce_hsKgcyeqQrBrI1PJDHUvzfuqleO56=w276-h91-no">
</p>

<p align="center">
version: 1.0.0
</p>

## Tentang eRapor SMKN 1 Krangkeng

eRapor tersebut, dikembangkan sebagai aplikasi pendukung dalam membuat rapor SMK yang didasarkan pada Panduan Penilaian Hasil Belajar pada Sekolah Menengah Kejuruan Tahun 2017. Aplikasi tersebut dikembangkan dengan Framework Laravel Versi 5.8

## Spesifikasi Minimum

Spesifikasi Minimum untuk menjalankan aplikasi tersebut adalah:
- PHP >= 7.1.3
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
- Ctype PHP Extension
- JSON PHP Extension
- BCMath PHP Extension
- MySQL 5.7
- WAMPServer or XAMPP Server

## Instalasi
- Install Composer [https://getcomposer.org/download/]
- Install WampServer [https://sourceforge.net/projects/wampserver/files/latest/download] atau
Xampp [https://downloadsapachefriends.global.ssl.fastly.net/7.2.18/xampp-windows-x64-7.2.18-0-VC15-installer.exe?from_af=true]
- Download aplikasi di [https://github.com/ozonerik/laravel-eraporsmk/] 
- Unzip laravel-eraporsmk-master.zip di [C:\wamp64\www] untuk WampServer atau di [C:\xampp\htdocs] untuk Xampp
- Rename Folder laravel-eraporsmk-master menjadi erapor
- Konfigurasi database melalui file .env 
  contoh:
  <code>
  DB_DATABASE=erapor
  DB_USERNAME=root
  DB_PASSWORD=root
  </code>
- buka CMD, ketik cd C:\wamp64\www\erapor atau cd C:\xampp\htdocs\erapor
- ketik <code>php artisan migrate:fresh --seed</code>
- buka browser <url>http://localhost/erapor/public</url>
- login menggunakan demo akun dengan username/password: 
   - admin/admin
   - operator/operator
   - walikelas/walikelas
   - guru/guru
   - siswa/siswa

## Release Changelogs Versi 1.0.0
- Sistem Otentikasi Login dan Register
- Fungsi Hak Akses Halaman
- CRUD (Create, Update, Delete)
- Fungsi Multi Delete dengan Checkbox
- Fungsi Delete dengan Modal Dialog
- Fungsi Ekspor PDF (Paper Size: Folio)
- Search dan Pagination

## Tim Pengembang
- M. Ade Erik [ozonerik@gmail.com]

