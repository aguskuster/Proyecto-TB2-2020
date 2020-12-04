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
- Docker :

Ejecutar:
` # docker-compose up`

` # docker exec -ti laravel_app /bin/bash`

` # php artisan key:generate`

` # php artisan config:cache`

` # php artisan migrate:fresh`

` # php artisan serve`



docker exec -ti laravel_mysql mysql -u root

Iniciar Tinker: php artisan tinker

Crear usuario con Tinker:
$user = new App\User; 
$user->name = 'nombre'; $user->email = 'un@mail.com';
$user->password = Hash::make('12345');
$user->save();





Comandos php artisan make:
` php artisan make:controller nombreDelControlador # CREAR UN CONTROLADOR`

` php artisan make:model nombreDelModelo # CREA UN MODELO`

` # php artisan make:migration nombreDeLaMigracion # CREA UNA MIGRACION`

` # LUEGO DE CREAR LA MIGRATION Y PONER EL CODIGO PARA CREAR LA TABLA , ACORDATE DE PONER:`

` # php artisan migrate`


` # php artisan serve`
Prueba