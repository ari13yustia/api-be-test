## Sprint 1 Fetching Data
fetching API data provinsi & kota dan data
disimpan ke dalam database.

- $ git checkout sprint1

- composer Install

- php artisan migrate

- php artisan key:generate

- php artisan command:fetch_data (Fetch data dan disimpan ke database)

- vendor/bin/phpunit (Unit Testing)

Cari data province dan city
- php artisan serve
- http://127.0.0.1:8000/api/search/province?id={id province}
- http://127.0.0.1:8000/api/search/city?id={id city}
