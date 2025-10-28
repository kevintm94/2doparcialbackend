<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<h2>Backend</h2>
</p>

## Establecer base de datos

Al ser una aplicación basada en laravel, tiene definiada la tabla de la bd y seeder para cargar datos iniciales, ejecutar el comando:

- php artisan migrate:fresh --seed

Si se hizo una previa migración los datos anteriores se borraran antes de grabas los establecidos en el seeder.

## Rutas

Para el objetivo del parcial, se establecieron las rutas basicas para la tabla empleados:
- **[GET]** http://127.0.0.1:8000/api/empleados
- **[POST]** http://127.0.0.1:8000/api/empleados
- **[PUT]** http://127.0.0.1:8000/api/empleados
