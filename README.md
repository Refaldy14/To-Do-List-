#ToDoList

##Deskripsi
Aplikasi Sederhana berbasis PHP menggunakan Laravel untuk mencatat tugas Harian.

##Fitur
-Tambah Tugas.
-Tandai tugas selesai.
-Hapus Tugas

##Struktur Folder
-Controllers/'TaskController.php'
-Models/'Task.php'
public/CSS/style.css

#Main Page
views/tasks/'index.blade.php'
views/partials/'edit.blade.php'

##Cara Menjalankan
Clone project ke folder laragon/www/
cd C:\laragon\www
git clone https://github.com/Refaldy14/To-Do-List-.git
cd To-Do-List-

Install dependency Laravel:
composer install

Salin file .env dan generate key:
cp .env.example .env
php artisan key:generate

Jalankan Laravel:
php artisan serve

Buka di browser:
http://127.0.0.1:8000/tasks

##Kontributor
- [Refaldy Destian Nur Pertala](https://github.com/Refaldy14)
