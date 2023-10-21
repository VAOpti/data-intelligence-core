This is the package that is to be used when creating a Data Intelligence application.

## Setup
- Change the `.env` DB credentials.

- Add the following connection to the central database in the file `config/database.php`:  
```php
'central_db' => [
    'driver'         => 'mysql',
    'url'            => env('DATABASE_URL'),
    'host'           => env('DB_CENTRAL_HOST', '127.0.0.1'),
    'port'           => env('DB_CENTRAL_PORT', '3306'),
    'database'       => env('DB_CENTRAL_DATABASE', 'forge'),
    'username'       => env('DB_CENTRAL_USERNAME', 'forge'),
    'password'       => env('DB_CENTRAL_PASSWORD', ''),
    'unix_socket'    => env('DB_SOCKET', ''),
    'charset'        => 'utf8mb4',
    'collation'      => 'utf8mb4_unicode_ci',
    'prefix'         => '',
    'prefix_indexes' => true,
    'strict'         => true,
    'engine'         => null,
    'options'        => extension_loaded('pdo_mysql') ? array_filter([
        PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
    ]) : [],
],
```
