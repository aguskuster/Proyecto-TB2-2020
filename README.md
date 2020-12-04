# Miro y Trello

https://miro.com/welcomeonboard/CLoc2tHiWjiWMcKf2AnsV1IVcT40jLZUrUpva7GrrEIAdzn1jh8CbTPomJnr3WrF

https://trello.com/invite/b/nQ9tEBMG/250b251aee97de81ccf66c5c06ab2553/proyecto-2020

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
