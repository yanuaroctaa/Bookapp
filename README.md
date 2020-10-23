Yanuar Octavianus
185150700111006

Step:
    1.  Membuka cmd, lalu ketik composer create-project --prefer-dist laravel/lumen bookapp untuk membuat direktori bookapp di folder user
    2.  Membuat database dengan mengaktifnya xampp, lalu membuka localhost/phpmyadmin. Buat database dengan nama "bookapp_lumen"
    3.  Meng edit .env di dalam projek bookapp untuk mengkoneksikan ke dalam database
    4.  Mengkatifkan fitur Facades dan Eloquent dengan membuka app.php lalu menghapus commentnya
    5.  Membuat migration dengan perintah php -artisan make:migration create_books_table --create=books
    6.  Menambahkan title, description, author ke dalam file migration
    7.  Menjalankan perintah php artisan migrate untuk mengeksekusi file yang sudah di edit
    8.  Menambahkan isi title, description, author, created_at, updated_at ke dalam file DatabaseSeeder.php
    9.  Menjalankan perintah php artisan db:seed untuk mengeksekusi file yang sudah di edit
    10. Membuat file Book.php di direktori app\Models
    11. Menambahkan atribut ke dalam Book.php
    12. Membuat file BooksController.php di direktori app\http\controller
    13. Menambahkan fungsi index untuk memanggil data melalui Book
    14. Menambahkan fungsi show untuk melihat data yang ingin di tampilkan berdasarkan id nya
    15. Menambahkan route $router->get('/books', 'BooksController@Index') di route/web
    16. Menambahkan route $router->get('/books/{id}', 'BooksController@show') di route/web
    17. Memasukan perintah php -S localhost:800 -t public ke dalam terminal untuk menjalankan aplikasi 
    18. Meng inisiasi git dengan git init
    19. Memasukkan file dengan git add .
    20. Membuat commit dengan git commit -m "Bookapp"
    21. Menambahkan link dengan git remote add origin "https://github.com/yanuaroctaa/Bookapp"
    22. Melakukan push dengan git push -u origi master