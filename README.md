# LOAD-DATA-INFILE WITH LARAVEL / MYSQL

Import a .csv file using LOAD-DATA-INFILE on Laravel to MySQL database and shows the db-table in a Laravel View (blade).
Visit the routes file to use each functionality.

## Details

* The function `` handle() `` is into a Job, this function receive a file .csv and insert data in the table 'products'. See the Job [here](https://github.com/anabelisam/LOAD-DATA-INFILE-LARAVEL-MYSQL/blob/master/inventario/app/Jobs/ImportCSV.php).

* Routes are in [web.php](https://github.com/anabelisam/LOAD-DATA-INFILE-LARAVEL-MYSQL/blob/master/inventario/routes/web.php). You will find two: listProducts and csv.

* The products list is a simple html in a [blade](https://github.com/anabelisam/LOAD-DATA-INFILE-LARAVEL-MYSQL/blob/master/inventario/resources/views/products.blade.php).

### Clone this project and run
```bash
php artisan serve
```

You need to have Php and Laravel installed!
