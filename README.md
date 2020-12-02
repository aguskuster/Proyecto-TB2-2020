# Correr Local

Requerimientos: 
- PHP >= 7.4 (configurado para correr desde terminal/cmd)
- Composer

Ejecutar en terminal:
`# Instalar dependencias de Composer
composer install` 

`# Generar keys de laravel
php artisan keys:generate` 

`# Correr migraciones
php artisan migrate `



`# Ejecutar servidor local
php artisan serve`


# Ejecutar con Docker

Requermientos:
- Docker :)

Ejecutar:
` docker-compose up`
` docker exec -ti laravel_app /bin/bash`
` php artisan key:generate`
` php artisan migrate:fresh`
` php artisan serve`


docker exec -ti laravel_mysql mysql -u root

Iniciar Tinker: php artisan tinker

Crear usuario con Tinker:
$user = new App\User; 
$user->name = 'nombre'; $user->email = 'un@mail.com';
$user->password = Hash::make('12345');
$user->save();