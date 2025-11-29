DATA DIRI

Nama : Ramandhanu Isnaera Ahnaf Wibawa
Nim : H1H024061
Shift awal : C
Shift akhir : D

**PENJELASAN SINGKAT KODE DAN APLIKASI**

Deskripsi Singkat Aplikasi
*PokeCare* adalah aplikasi web sederhana berbasis PHP murni untuk mensimulasikan:

- melihat status Pokémon (Level, HP, Attack, Defense, Speed)  
- melakukan latihan pada Pokemon (Attack, Defense, Speed)  
- melihat riwayat hasil latihan dari Pokemon
- semua data disimpan menggunakan *session* sehingga perubahan tetap tersimpan  
- Pokémon yang digunakan sesuai instruksi tugas: *Psyduck*

**Penjelasan Singkat Kode**

`Pokemon.php`
Mengatur atribut umum Pokémon:

- Level  
- HP  
- Attack  
- Defense  
- Speed  
- Special Move  

Fitur :

- **Fungsi train()** → mengubah stat Pokémon berdasarkan jenis latihan  
- Menyimpan kondisi "before" dan "after" sebagai riwayat  

`Psyduck.php`
- Mewarisi seluruh fitur dari `Pokemon`
- Menambahkan:
  - Jurus khusus: **Water Pulse**
  - Bonus HP khusus Pokémon tipe Water ketika latihan Defense
  - Override method `specialMoveDescription()`


`index.php`
Halaman beranda:

- Menampilkan gambar Psyduck
- Menampilkan status lengkap: Level, HP, Attack, Defense, Speed
- Tombol:
  - **Mulai Latihan**
  - **Riwayat Latihan**

Data Pokémon diambil dari **session**.


`latihan.php`
Halaman untuk:

- Menginput jenis latihan (Attack/Defense/Speed)
- Menginput intensitas latihan
- Menampilkan hasil latihan (before → after)
- Menyimpan hasil latihan ke session *riwayat*


`riwayat.php`
Menampilkan daftar seluruh latihan yang pernah dilakukan.
  
- Menampilkan:
  - Jenis latihan  
  - Intensitas  
  - Level before → after  
  - HP before → after  
  - Waktu latihan  

  **CARA MENJALANKAN APLIKASI**
  1. Buka Laragon
  2. Jalankan Laragon → klik **Start All**
  3. Buka browser dan ketik: **http://localhost/POKECARE/**
  4. Ketika sudah muncul bisa berarti sudah bisa digunakan
  5. Jika ingin menggunakannya bisa klik **Mulai Latihan**
  6. Lalu kita bisa memilih mau mode latihan apa saja intensitasnya sesuai yang kita mau
  7. Setelah selesai memilih bisa klik **Mulai Latihan** lagi untuk melihat hasilnya
  8. Lalu disitu akan muncul hasil dari latihan yang kita gunakan barusan 
  9. Jika ingin mengecek hasil riwayat kita bisa klik dibagian **Lihat Riwayat** disitu akan terlihat semua hasil yang kita mainkan tadi

  10. Setelah selesai kita bisa kembali ke halaman utama dengan klik **Kembali**
 
  ![VideoPenjelasanAplikasiPOKECARE](https://github.com/user-attachments/assets/8727fb36-5e04-411f-b62e-262cc1d947c8)

