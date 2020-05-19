# PPDB SMP Cendikia Baznas
![ ](https://github.com/afifahnovian/PSBO---Pendaftaran-Siswa-Baru-SCB/blob/master/img/ppdb.png)

[Sekilas Tentang](#sekilas-tentang) | [Ruang Lingkup](#ruang-lingkup-pengembangan) | [Diagram](#diagram) |[Fitur-fitur](#fitur-secara-umum) | [Konsep OOP](#konsep-oop-yang-digunakan) | [Tipe Design](#tipe-design) | [Developer](#developer)
:---:|:---:|:---:|:---:|:---:|:---:|:---:



## Sekilas Tentang 
Sistem Penerimaan Peserta Didik Baru (PPDB) secara online melalui website resmi SMP Cendekia Baznas adalah sebagai penghubung antara calon siswa dan pihak SMP Cendekia Baznas. Melalui sistem ini dapat mempermudah calon siswa untuk mendaftarkan dirinya tanpa perlu bersusah payah untuk mengunjungi sekolah secara langsung. Sistem ini terbagi menjadi 2 yaitu untuk pendaftar dan admin SMP Cendekia Baznas dengan tugas yang berbeda. Pada sisi pendaftar dapat mendaftarkan diri/calon siswa dengan mengisi form yang sudah disediakan dan mengupload berkas-berkas yang diminta untuk memenuhi pendaftaran.  Untuk admin berisikan informasi mengenai data dan berkas dari calon siswa, dapat menampilkan daftar siswa yang lulus maupun tidak lulus, mengupdate data, dan menghapus data yang masuk. Dengan adanya sistem ini diharapkan lebih mempermudah dan memberikan dampak yang lebih baik untuk penerimaan peserta didik baru SMP Cendekia Baznas. 

## Ruang Lingkup Pengembangan
Ruang lingkup pengembangan dari sistem ppdb ini sebagai berikut:  
    1. Hanya dapat digunakan atau berjalan pada web browser                                                                                                                               
    2. Proses pelampiran hasil seleksi dilakukan oleh admin scb                                                                                                                                     
    3. Tidak perlu login untuk pendaftar
    
**Front End**
adalah halaman web yang dapat terlihat oleh public (pengunjung) yaitu  berupa  tampilan  depan website meliputi pendaftaran,  dan melihat hasil seleksi.                                                                                    
**Back   End** adalah   bagian   yang   khusus diperuntukan   para   admin untuk mengelola website berupa  tampilan  Admin,login  admin, menampilkan daftar siswa yang lulus maupun tidak lulus, mengupdate data, dan menghapus data yang masuk.

## Diagram 
* *Usecase*

![ ](/img/UseCase.jpg)
* *Activity*

![ ](/img/Activity-diag.jpg)
* *Class*

![ ](/img/class-diagram.jpg)

## Fitur Secara Umum
* Calon Siswa
    * Pendaftaran calon siswa dengan mengisi form 
    * Upload berkas
    * Melihat hasil seleksi
* Admin Scb
    * Menampilkan hasil seleksi, mengupdate data, dan menghapus data yang masuk
    * Melihat persebaran pendaftar
    
## Konsep OOP 
**Data Abstraction** adalah konsep yang menyembunyikan detail latar belakang dan hanya mewakili informasi yang diperlukan untuk dunia luar. 

**Enkapsulasi (encapsulation)** adalah sebuah metoda untuk mengatur struktur class dengan cara menyembunyikan alur kerja dari class tersebut. Struktur class yang dimaksud adalah property dan method. Dengan enkapsulasi, kita bisa membuat pembatasan akses kepada property dan method, sehingga hanya property dan method tertentu saja yang bisa diakses dari luar class. Enkapsulasi juga dikenal dengan istilah ‘information hiding’. Dengan enkapsulasi, kita bisa memilih property dan method apa saja yang boleh diakses, dan mana yang tidak boleh diakses. Dengan menghalangi kode program lain untuk mengubah property tertentu, class menjadi lebih terintegrasi, dan menghindari kesalahan ketika seseorang ‘mencoba’ mengubahnya.

**Inheritance**
Warisan juga merupakan karakteristik penting dari OOP. Ini pada dasarnya adalah metode yang menyediakan cara yang kemampuan dan properti dari satu kelas untuk datang ke kelas lain. Teknik ini memberikan penggunaan kembali kode untuk programmer. Kita bisa membentuk kelas baru dari kelas yang ada, di mana kelas yang ada berisi beberapa properti atau metode yang juga ada di kelas baru. Di sini kelas baru disebut sebagai kelas turunan. Sedangkan kelas yang ada yaitu kelas dari mana kelas baru diturunkan disebut sebagai kelas dasar.

**Polymorphism**
Pada dasarnya polimorfisme adalah kemampuan suatu pesan atau data untuk diproses lebih dari satu bentuk. Ini adalah konsep penting dari pemrograman berorientasi objek yang mendukung kemampuan suatu objek kelas untuk berperilaku berbeda dalam menanggapi pesan atau tindakan.

## Tipe Design 
Pada Web PPDB SCB, kelompok kami menggunakan design pattern MVC (Model View controller). MVC memecah sebuah aplikasi menjadi tiga bagian, yaitu model yang berhubungan dengan database, view yang berurusan dengan tampilan, dan controller yang mengatur alur jalannya aplikasi. Untuk itu, framework yang digunakan yaitu Laravel. Database yang digunakan yaitu mysql.
![ ](/img/MVC.png)

## Developer 



