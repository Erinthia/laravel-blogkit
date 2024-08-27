PERTEMUAN 27
AUTHENTICATION DAN AUTHORIZATION DI LARAVEL



![image](https://github.com/user-attachments/assets/09fa4c32-be55-4b2a-a56c-9a517272ddf4)

 



Nama		: Erinthia Dinda Pratiwi
Kelas		: 3B
NIM		: 2231740005






POGRAM STUDI D3 TEKNOLOGI INFORMASI
JURUSAN TEKNOLOGI INFORMASI
POLITEKNIK NEGERI MALANG PSDKU LUMAJANG
2024
A.	Implementasi Authentication di Laravel
Kita akan menerapkan penggunakan authentication di Laravel. Dalam penerapan ini, kita menggunakan starter kit yang disediakan oleh Laravel 10 dengan Laravel Breeze.
Praktikum 1 -Impelentasi Authentication
1.	Kita buat project baru dengan mengetik perintah berikut pada Terminal atau CMD
 ![image](https://github.com/user-attachments/assets/3bdf6e3d-91c1-43f0-b784-454daf12de3a)

2.	Kemudian kita modifikasi file .env agar dapat terkoneksi dengan SQLite seperti berikut. 
 ![image](https://github.com/user-attachments/assets/af944946-aedc-4273-a068-67f7ea836a45)

3.	Setelah selesai, selanjutnya kita lakukan migrate dengan perintah berikut
 ![image](https://github.com/user-attachments/assets/6e197484-e28f-4dc1-8494-dd2e0ef2c953)

4.	Sekarang kita unduh starter kit breeze dengan composer melalui perintah berikut
 ![image](https://github.com/user-attachments/assets/1445a65c-2fdd-4a88-866c-2bcd72cd1c36)

5.	Kemudian install dengan perintah artisan berikut
 
![image](https://github.com/user-attachments/assets/3ea6b818-c39b-4de2-ba04-3e2a40c0941c)

Proses instalasi seperti gambar berikut
 ![image](https://github.com/user-attachments/assets/17001c7c-be5e-4fee-9421-2b3257745bd6)

6.	Selanjutnya jalankan perintah berikut
 ![image](https://github.com/user-attachments/assets/2c82f953-564a-4f3c-b145-d34140633d9c)

7.	Selanjutnya, kita run dengan perintah php artisan serve lalu hasilnya seperti gambar berikut. Perhatikan di pojok kanan atas, terdapat menu untuk Log in dan Register
 ![image](https://github.com/user-attachments/assets/b8d0f96e-e9dc-45a1-be52-9b03fb1363b7)
![image](https://github.com/user-attachments/assets/9e11f0c1-afb4-4555-ad6b-f06a82424afb)

 
B.	Tugas 1
Selesaikan praktikum 1 hingga Anda bisa melakukan login ke Dashboard. Pelajari bagian controller, view, model dan middleware yang terbentuk dalam project tersebut. Push ke akun github Anda masing-masing lalu lampirkan link repo github Anda ke LMS Tugas 27. Lengkapi di file README sebagai laporan praktikum Anda disertai dengan hasil capture tiap langkah atau hasil akhirnya


C.	Implementasi Authorization di Laravel
Selain menyediakan layanan otentikasi bawaan, Laravel juga menyediakan cara sederhana untuk mengotorisasi tindakan pengguna terhadap sumber daya tertentu. Misalnya, meskipun pengguna diautentikasi, mereka mungkin tidak berwenang untuk memperbarui atau menghapus model Eloquent atau rekaman database tertentu yang dikelola oleh aplikasi Anda. Fitur otorisasi Laravel menyediakan cara yang mudah dan terorganisir untuk mengelola jenis pemeriksaan otorisasi ini.
Laravel menyediakan dua cara utama untuk mengotorisasi tindakan: gates dan policies. Bayangkan gates dan policies seperti rute dan pengontrol. Gates menyediakan pendekatan otorisasi berbasis penutupan yang sederhana, sementara policies, seperti pengontrol, mengelompokkan logika di sekitar model atau sumber daya tertentu. Dalam jobsheet ini, kita akan menjelajahi gates terlebih dahulu, lalu memeriksa policies.
Anda tidak perlu memilih antara menggunakan gates secara eksklusif atau menggunakan policies secara eksklusif saat membuat aplikasi. Sebagian besar aplikasi kemungkinan besar berisi campuran gates dan policies, dan itu tidak masalah! Gates paling dapat diterapkan pada tindakan yang tidak terkait dengan model atau sumber daya apa pun, seperti melihat dasbor administrator. Sebaliknya, policies harus digunakan ketika Anda ingin mengotorisasi suatu tindakan untuk model atau sumber daya tertentu






Praktikum 2 -Implementasi Authorization di Laravel
Kita akan menerapkan authorization pada project Laravel. Langkah-langkah yang kita kerjakan sebagai berikut:
1)	Kita akan menggunakan Laravel Blog Starter Kit yang dibangun dengan Laravel 10, Tailwind CSS, AlpineJS, dan Livewire.
2)	Lakukan git clone dengan perintah berikut di Terminal
 ![image](https://github.com/user-attachments/assets/ab300def-e257-446d-b272-39ddafc6698d)

3)	Kemudian buka project laravel-blogkit dengan code editor favorit Anda, lalu install dependensi dengan perintah composer install 
 ![image](https://github.com/user-attachments/assets/f1834cf2-8b0d-486f-8cd5-fb4535cf5ee6)

4)	Pada bagian config file config/blog.php ubahlah demoMode menjadi true 
 ![image](https://github.com/user-attachments/assets/5feb01a7-80a7-47b4-bfbf-ff4a6cfe1f2e)

5)	Lalu rename file .env.example menjadi .env 
 ![image](https://github.com/user-attachments/assets/9eed3ea5-6d75-4257-991d-3c47c018df0d)

6)	Sesuaikan DB config dengan menggunakan SQLite seperti pada praktikum 1 sebelumnya. 
7)	Kemudian jalankan perintah berikut untuk menggenerate key pada .env php artisan key:generate 
 ![image](https://github.com/user-attachments/assets/7f1fcb32-2bf6-4f7b-9f1d-97e8a2c330bb)

8)	Lalu lakukan migration dengan perintah berikut php artisan migrate 
9)	Selanjutnya kita buat akun admin dengan cara menjalankan perintah berikut php artisan admin:create 
 ![image](https://github.com/user-attachments/assets/1f3eaba3-bb05-4536-80c2-5a47d09a1939)

Hasilnya seperti gambar berikut Terakhir coba running dengan perintah php artisan
 ![image](https://github.com/user-attachments/assets/2b905155-7165-4335-bc55-cffe6dd40a5b)

Terakhir coba running dengan perintah php artisan serve 
10)	 Coba login dengan akun admin, pelajari setiap menu dan tampilan yang ada. 
11)	Buatlah akun dengan cara register, lalu ubah otorisasi antara admin, guest, author, dan akun yang diblokir (banned)
D.	Tugas 2
Implementasikan authentication dan authorization pada project Laravel tugas pertemuan sebelumnya
