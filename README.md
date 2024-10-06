# Tugas 6 Pemrograman Web

### Daniel Bintang W. Sitorus - 140810230048
Repository ini berisi tugas pembuatan aplikasi input data mahasiswa yang mencakup fitur **insert**, **update**, **delete**, dan **tampil data** dalam bentuk tabel. Setiap data mahasiswa memiliki NPM, nama, alamat, tanggal lahir, jenis kelamin, dan email. Data tersebut disimpan dalam database MySQL dengan tabel `identitas`.

## Fitur Aplikasi

1. **Insert Data Mahasiswa**  
   Mengisi form untuk menambahkan data mahasiswa baru ke dalam database.

2. **Tampil Data Mahasiswa**  
   Menampilkan data mahasiswa dalam bentuk tabel yang diurutkan berdasarkan NPM.

3. **Update Data Mahasiswa**  
   Mengedit informasi mahasiswa yang sudah ada.

4. **Delete Data Mahasiswa**  
   Menghapus data mahasiswa yang sudah tidak diperlukan.

## Struktur Database

Nama database: `mhs`

Tabel: `identitas`

| Kolom         | Tipe Data      | Deskripsi                            |
|---------------|----------------|--------------------------------------|
| `npm`         | VARCHAR(12)     | Primary Key, diisi secara manual     |
| `nama`        | VARCHAR(40)     | Nama mahasiswa                      |
| `alamat`      | VARCHAR(100)    | Alamat mahasiswa                    |
| `tgl_lhr`     | DATE            | Tanggal lahir mahasiswa              |
| `jk`          | CHAR(1)         | Jenis kelamin (L/P)                  |
| `email`       | VARCHAR(50)     | Email mahasiswa                     |

## Daftar File

- `index.php` - Halaman utama untuk menampilkan form input dan tabel data mahasiswa.
- `db_connect.php` - File untuk koneksi ke database MySQL.
- `insert.php` - Skrip untuk menangani proses penyimpanan data mahasiswa ke dalam database.
- `update.php` - Halaman untuk mengedit data mahasiswa yang telah ada.
- `delete.php` - Skrip untuk menghapus data mahasiswa dari database.
- `mhs.sql` - File SQL untuk membuat database dan tabel `identitas`.
- `style.css` - File CSS untuk styling halaman.

## Struktur Folder

tugas6-pemweb-140810230004-francisco-gilbert-sondakh/ ├── db_connect.php ├── index.php ├── insert.php ├── update.php ├── delete.php ├── mhs.sql └── myStyle.css


## Cara Penggunaan

1. Clone repository ini ke komputer lokal:
   ```bash
   git clone https://github.com/DinosaurusBaik/Tugas_5.git
