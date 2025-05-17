> Yang Akan Di Pelajari
1. File dan folder struktur
2. Perubahan konfigurasi
3. Define Route
4. Model dan migrasi
5. factories dan seeders
6. generate controler
7. crud 
8. Layout dan views
9. components
10. registrasi dan login
11. validasi data dan save
12. session, csrf token

> Instalasi
1. xampp
2. nodejs
3. composer
4. vscode
   1. php
   2. laravel blade formatter
   3. laravel blase snippet
   4. laravel extra intellisense
   5. laravel goto view
   6. auto rename tag
   7. highlight matching tag
   8. prettier
   9. intellisense for css class names in html
   10. tailwind css intellisense
5. git

> Create Project 
composer create-project laravel/laravel laravel-crash-course

Perintah tersebut digunakan untuk membuat proyek Laravel baru menggunakan Composer. Berikut adalah cara membacanya:

composer: Perintah untuk menjalankan Composer, yaitu dependency manager untuk PHP.
create-project: Perintah Composer untuk membuat proyek baru berdasarkan template atau kerangka kerja tertentu.
laravel/laravel: Paket atau template proyek Laravel yang akan digunakan.
laravel-crash-course: Nama folder tempat proyek Laravel baru akan dibuat.
Jadi, perintah ini akan membuat proyek Laravel baru di folder bernama laravel-crash-course.

>Start Localhost
php artisan serve

>Tambah terminal baru di vscode untuk install node js nya
npm install

>run npm run dev
Gunanya untuk menjalankan vite agar hot reload

>Foldering
1. App
   1. biasanya ketika execute artisan command baru nanti akan membuat file baru dll disini
2. Bootsrap
   1. app.php
      1. gunanya membuat aplikasi. configure route dll
   2. provider.php
      1. gunanya hanya array yang mengembalikan hasil nilai service provider
3. Config
   1. Configurasi yang berisi hal2 yang biasanya di perlukan untuk service2 yang ada, seperti database dll
4. Database
   1. Factories
      1. untuk define struktur dari setiap field. ketika mengenerate data seed bagaimana seed data seharusnya di generate
   2. Migrasi
      1. ???
   3. Seeders
      1. ???
5. Public hal yang dapat di akses dari browser
   1. Index.php, awalanya dari seluru ( jangan taruh hal sensitif disini)
   
- folder yang sering dipakai
- 1. APP
- 2. RESOURCES
  
dan lainnyaa

> Artisan overview
1. php artisan list
   1. Kemungkinan banyak pake command ini.

> File config
1. bebas hapus dll jika dibutuhkan. dapat di pulihkan kembali
2. untuk mengembalikan atau menambah. "php artisan config:publish"

> Routes
cara bacanya tuh 
"Route::get('/', function () {
    return view('welcome');
});
"
di / akan mengembalikan value "memberikakan" view pada (resources/view/welcome)

>resources
banyaknya tentang html. untuk welcome.blade.php dapat di hapus semua dan tuliskan hello world

> Membuat controller dan render view welcome dari controller baru
"php artisan make:controller welcomController"
nanti akan menjadi class kosong 

> controller ??
ubah kode yang ada menjadi ini "Route::get('/', [welcomController::class, 'welcome'])->name('welcome');"

> Make eliquent model ?, dan related migration
"php artisan make:model Note -m"

> Migrate atau migration ?
dalam folder database di dalam migration akan ada file baru terbuat nah disitu ditambahkan lagi sebuah tabel database note. mungkin ini adalah sebuah table generator ya?.

> SEEDER & Factory ?
"php artisan make:factory NoteFactory --model=Note"
database seeder. atau kemungkinan yang aku pahami adalah sebuah insert to database

>> Mulai coding peroject pake setup dan database schema yang barusan dibuat ini
kita butuh node controller "php artisan make:controller NoteController --resource --model=Note"
habis eksekusi terminal thingy. harusnya kita bisa dapat noteController

> Note Controller yang barusan di buat ada  method
> 1. untuk display seluruh nodes
> 2. membaut form untuk mendisplay nodes
> 3. create new node
> 4. show specific nodes
> 6. show form untuk update salah satu nodes
> 5. Update node
> 7. Delete node

di dalam method itu kita nanti mengkonfirmasi instance node model eloquent yan barusan kita buat

> Dari controller yang barusan kita buat
kita akan define route nya di web.php
Route::get('/note/{id}/edit', [NoteController::class, 'edit'])->name('note.edit');

ini cara bacanya : ketika kita ada di halaman web ini (/note/{id}/edit'), nanti akan di atur oleh ini (NoteController::class, 'edit'), yang ada di dalam controller. dan jangan lupa dilihat methodnya get atau post. kemudian untuk name cuma untuk id saja

