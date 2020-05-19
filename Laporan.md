# PPDB SMP Cendikia Baznas
![ ](https://github.com/afifahnovian/PSBO---Pendaftaran-Siswa-Baru-SCB/blob/master/img/ppdb.png)

[Sekilas Tentang](#sekilas-tentang) | [Ruang Lingkup](#ruang-lingkup-pengembangan) | [Diagram](#diagram) |[Fitur-fitur](#fitur-secara-umum) | [Konsep OOP](#konsep-oop-yang-digunakan) | [Tipe Design](#tipe-design) | [Developer](#developer)
:---:|:---:|:---:|:---:|:---:|:---:|:---:



## Sekilas Tentang 
Penerimaan Peserta Didik Baru (PPDB) secara Online melalui website resmi SMP Cendekia Baznas adalah  sistem yang terbagi menjadi 2 yaitu untuk pendaftar dan admin SMP Cendekia Baznas dengan tugas yang berbeda. Pada sisi pendaftar dapat mendaftarkan diri/calon siswa dengan mengisi form yang sudah disediakan dan mengupload berkas-berkas yang diminta untuk memenuhi pendaftaran.  Untuk admin berisikan informasi mengenai data dan berkas dari calon siswa, dapat menampilkan daftar siswa yang lulus maupun tidak lulus, mengupdate data, dan menghapus data yang masuk.

## Ruang Lingkup Pengembangan
Ruang lingkup pengembangan dari sistem ppdb ini sebagai berikut:  
    1. Hanya dapat digunakan atau berjalan pada web browser                                                                                                                               
    2. Proses pelampiran hasil seleksi dilakukan oleh admin scb                                                                                                                                     
    3. Tidak perlu login untuk pendaftar
    
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
**Enkapsulasi (encapsulation)** adalah sebuah metoda untuk mengatur struktur class dengan cara menyembunyikan alur kerja dari class tersebut. Struktur class yang dimaksud adalah property dan method. Dengan enkapsulasi, kita bisa membuat pembatasan akses kepada property dan method, sehingga hanya property dan method tertentu saja yang bisa diakses dari luar class. Enkapsulasi juga dikenal dengan istilah ‘information hiding’. Dengan enkapsulasi, kita bisa memilih property dan method apa saja yang boleh diakses, dan mana yang tidak boleh diakses. Dengan menghalangi kode program lain untuk mengubah property tertentu, class menjadi lebih terintegrasi, dan menghindari kesalahan ketika seseorang ‘mencoba’ mengubahnya. 

## Tipe Design 
Pada Web PPDB SCB, kelompok kami menggunakan design pattern MVC (Model View controller). MVC memecah sebuah aplikasi menjadi tiga bagian, yaitu model yang berhubungan dengan database, view yang berurusan dengan tampilan, dan controller yang mengatur alur jalannya aplikasi. Untuk itu, framework yang digunakan yaitu Laravel. Database yang digunakan yaitu mysql.
![ ](/img/MVC.png)

## Developer 



