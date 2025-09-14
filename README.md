<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


# Sistem Informasi Arsip Surat Berbasis Website Framework Laravel  
(Studi Kasus: Arsip Surat Desa Karangduren)

---

## Tujuan
Sistem Informasi ini dibuat untuk membantu instansi atau organisasi dalam:
- Mengelola arsip surat masuk atau keluar secara digital.  
- Menyederhanakan pengelolaan kategori surat.  
- Menyediakan akses cepat terhadap surat dengan fitur pencarian.  
- Mengurangi penggunaan arsip fisik agar lebih efisien.  

---

## Fitur

### 1. Manajemen Arsip Surat
- Tambah arsip surat baru (unggah file PDF).  
- Edit arsip surat.  
- Hapus arsip dengan konfirmasi.  
- Lihat detail surat (preview file PDF).  
- Download surat dalam format PDF (dengan nama file sesuai input).  

### 2. Pencarian Arsip
- Cari surat berdasarkan judul yang mengandung kata tertentu.  

### 3. Manajemen Kategori Surat
- ID kategori otomatis (urutan penomoran).  
- Tambah kategori baru.  
- Edit kategori yang sudah ada.  
- Hapus kategori surat.
  
### 4. Pencarian Kategori Arsip Surat
- Cari Kategori Surat berdasarkan nama kategori tertentu.  

### 5. Halaman About
- Menampilkan foto, nama, NIM, dan tanggal pembuatan aplikasi.  

### 6. Validasi & Keamanan
- Upload file hanya mendukung format **PDF**.  
- Konfirmasi sebelum hapus data.  
- Penyimpanan file aman di storage.



## Cara Menjalankan/Clone Repository

1. **Buka CMD, untuk memastikan composernya terinstall, ketik**
      ```bash
      composer
3. **Buka repository project digithub, lalu tekan button code,copy bagian https**
4. **Buka Folder (untuk menyimpan project) -> jika sudah klik kanan pilih open terminal(cmd)**
5. **Ketik Perintah**
   ```bash
   git clone
   dir
   cd 
6. **Copy file .env.example menjadi .env, lalu antur konfigurasi database:**
   ```bash
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=arsipsurat_kelurahan
   DB_USERNAME=root
   DB_PASSWORD=
6. **Import Database**
   ```bash
   mysql -u root -p arsipsurat_kelurahan < database/arsipsurat_kelurahan.sql
    atau
   lakukan import manual file arsipsurat_kelurahan.sql melalui aplikasi MySQL
6. **Kemudian diterminal ketik**
   ```bash
   composer install
   npm install && npm run build
   php artisan key:generate
   php artisan migrate
6. **Jalankan Server:**
   ```bash
   php artisan serve
Akses dibrowser:http//localhost:8000




## Screenshot Dokumentasi Aplikasi
1. **Halaman Utama Arsip Surat**
   <p align="center">
      <img width="1919" height="1015" alt="1  Halamann Utama Arsip Surat"     src="https://github.com/user-attachments/assets/0d48f3b2-11f2-4982-b871-0d5cc4ad2c36" />
    </p>
    
2. **Halaman Unggah Arsip Surat**
   <p align="center">
       <img width="1919" height="1019" alt="2  Halaman Unggah Arsip Surat" src="https://github.com/user-attachments/assets/f716a15d-f178-4d6f-afac-f94ef7c24fa6" />
   </p>
   
3. **Berhasil Unggah Arsip Surat/ Berhasil Simpan**
   <p align="center">
       <img width="1919" height="1021" alt="3  Berhasil Unggah Arsip Surat" src="https://github.com/user-attachments/assets/47d681ba-6971-4a89-b7aa-33b0125f6f32" />
   </p>

4. **Halaman Lihat Arsip Surat**
   <p align="center">
       <img width="1919" height="1020" alt="4  Halaman Lihat Arsip Surat" src="https://github.com/user-attachments/assets/dc30ee96-4a9d-4308-89f6-b05e60b5fc4a" />
   </p>

5. **Halaman Ubah Arsip Surat**
   <p align="center">
       <img width="1919" height="1019" alt="5  Halaman Ubah Arsip Surat" src="https://github.com/user-attachments/assets/fb11cc9c-e705-4548-9fb0-8c270b08eb08" />
   </p>

6. **Berhasil Edit Unggahan Arsip Surat**
   <p align="center">
       <img width="1919" height="1020" alt="6  Berhasil Edit Unggahan Arsip Surat" src="https://github.com/user-attachments/assets/365b614c-d60f-4330-bc55-dfa9de45be3c" />
   </p>

7. **Halaman Download Arsip Surat**
   <p align="center">
       <img width="1919" height="1019" alt="7  Halaman Download Arsip Surat" src="https://github.com/user-attachments/assets/c6c4b4a3-8540-4603-a4b4-5df40484e3ff" />
   </p>

8. **Alert Hapus Data Arsip Surat**
   <p align="center">
       <img width="1919" height="1016" alt="8  Alert Hapus Data Arsip Surat" src="https://github.com/user-attachments/assets/d9da5791-a431-4763-bede-51c85d49c719" />
   </p>
   
9. **Data Arsip Surat Berhasil Dihapus**
   <p align="center">
       <img width="1919" height="1022" alt="9  Data Arsip Surat Berhasil Dihapus" src="https://github.com/user-attachments/assets/16306522-9220-4f70-a1a2-d6b57285af7e" />
   </p>

10. **Fitur Cari Surat**
       <p align="center">
           <img width="1919" height="1018" alt="10  Fitur Cari Surat" src="https://github.com/user-attachments/assets/1bdcaf85-c939-412d-a029-36678fb02e84" />
       </p>

11. **Halaman Kategori Arsip Surat**
       <p align="center">
           <img width="1919" height="1019" alt="11  Halaman Kategori Arsip Surat" src="https://github.com/user-attachments/assets/95c5a543-3547-47c1-8629-04e0473137e6" />
       </p>

12. **Halaman Tambah Arsip Surat**
       <p align="center">
           <img width="1919" height="1019" alt="12  Halaman Tambah Arsip Surat" src="https://github.com/user-attachments/assets/d78e192d-0c30-4523-a34d-e95ffc555fd7" />
       </p>
       
    **Catatan: ID ditentukan otomatis oleh MySQL dengan AUTO_INCREMENT. Jika ada data terhapus atau insert gagal, nomor ID bisa meloncat dan tidak selalu urut. seperti hasil gambar yang di bawah ini:**

13. **Berhasil tambah Kategorit**
       <p align="center">
           <img width="1919" height="1021" alt="13  Berhasil tambah Kategori" src="https://github.com/user-attachments/assets/bb7afec6-be32-40ae-a74c-049110041063" />
       </p>

14. **Halaman Edit Kategori**
       <p align="center">
           <img width="1919" height="1013" alt="14  Halaman Edit Kategori" src="https://github.com/user-attachments/assets/003f78d8-5491-4500-ae72-2c5470e744a9" />
       </p>
   
15. **Setelah Edit Kategori**
       <p align="center">
           <img width="1919" height="1017" alt="15  Setelah Edit Kategori" src="https://github.com/user-attachments/assets/76729db5-0c88-4d68-9a7d-2d1f6ecf0c23" />
       </p>
   
16. **Berhasil Edit Kategori**
       <p align="center">
           <img width="1919" height="1018" alt="16  Berhasil Edit Kategori" src="https://github.com/user-attachments/assets/0ffcbeda-ac3b-4b42-a59e-462b8a65a055" />
       </p>
       
17. **Hapus Kategori**
       <p align="center">
           <img width="1919" height="1021" alt="17  Hapus Kategori" src="https://github.com/user-attachments/assets/96f5f52f-105b-43ff-9f18-98fc1882e669" />
       </p>
   
18. **Cari Kategori**
       <p align="center">
           <img width="1919" height="1019" alt="19  Cari Kategori" src="https://github.com/user-attachments/assets/68108af5-0f1e-4fc5-b1fc-b5051985afa4" />
       </p>
   
19. **Berhasil Hapus Kategori**
       <p align="center">
           <img width="1919" height="1017" alt="20  Berhasil Hapus Kategori" src="https://github.com/user-attachments/assets/90cbd40a-c26d-4f20-bbb3-e7812e610cf9" />
       </p>
   
20. **Pesan Error Saat Kategori Yang Sudah Ada**
       <p align="center">
           <img width="1919" height="1018" alt="21  Pesan Error Saat Kategori Yang Sudah Ada" src="https://github.com/user-attachments/assets/486cef17-5d7e-4144-aeed-b08a0ecba819" />
       </p>
   
13. **Halaman About**
       <p align="center">
           <img width="1919" height="1013" alt="22  Halaman About" src="https://github.com/user-attachments/assets/6c0482a6-0664-47d2-a0f6-c4c37265795c" />
       </p>



   
