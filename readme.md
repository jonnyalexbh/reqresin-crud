Paradiso Solutions reqres.in
=================
## Instrucciones
### Clonar e instalar las dependencias:

``` bash
# Clonar el repositorio.
git clone https://github.com/jonnyalexbh/reqresin-crud.git
cd reqresin-crud/
# Instalar las dependencias del proyecto.
composer install
```
### Prerequisitos

Qué cosas necesita instalar antes y cómo instalarlo

* Composer
* Servidor Apache
* PHP 7+

### Copia el archivo de entorno:
``` bash
cp .env.example .env
php artisan key:generate
```
## Construido con

* [Laravel 5.7](https://laravel.com) - Framwework de desarrollo
    * [guzzlehttp/guzzle](https://packagist.org/packages/guzzlehttp/guzzle) - Peticiones HTTP
* [Boostrap 4](https://getbootstrap.com/) - Bootstrap

## Licencia

Este proyecto está licenciado bajo la Licencia MIT
