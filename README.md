## Sprint 2 Swapable implementation​ untuk endpoint pencarian provinsi dan kota
Membuat sumber data pencarian province & cities bisa melalui database​ atau direct API​ raja ongkir (swapable implementation). Proses swap implementasi dapat dilakukan melalui konfigurasi tanpa merubah source code yang sudah dibuat.

- $ git checkout sprint1

- composer Install

- php artisan migrate

- vendor/bin/phpunit (Unit Testing)

Cari data province dan city
- php artisan serve

*Register
- http://127.0.0.1:8000/api/register
dengan body :
name                => input_name, 
email               => input_email, 
password            => input_password, 
password_confirment => input_password_confirment

*Login
- http://127.0.0.1:8000/api/login
dengan body :
email               => input_email, 
password            => input_password

*Mengubah sumber data pencarian province & cities (swap)
- Go to file app/config_search.php
- Set return config_search function menjadi true untuk mengambil data dari database
- Set return config_search function menjadi false untuk mengambil data dari Rajaongkir.com

*Cari data Province
http://127.0.0.1:8000/api/search_swap/province?id={id province}
dengan header :
Accept          => application/json, 
Authorization   => Bearer {token}

*Cari data Province
http://127.0.0.1:8000/api/search_swap/city?id={id city}
dengan header :
Accept          => application/json, 
Authorization   => Bearer {token}
