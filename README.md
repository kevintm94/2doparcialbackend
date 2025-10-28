<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Establecer base de datos

Al ser una aplicación basada en laravel, tiene definiada la tabla de la bd y seeder para cargar datos iniciales, ejecutar el comando:

- php artisan migrate:fresh --seed

Si se hizo una previa migración los datos anteriores se borraran antes de grabas los establecidos en el seeder.

## Tabla
Nombre de table: empleados
Campos:
- id (PK, AI)
- nombre (string, requerido)
- apellido (string, requerido)
- correo (string, único, requerido)
- salario (decimal(10,2), requerido)
- timestamps

## Rutas

Para el objetivo del parcial, se establecieron las rutas basicas para la tabla empleados:
- **[GET]** http://127.0.0.1:8000/api/empleados
- **[POST]** http://127.0.0.1:8000/api/empleados
- **[PUT]** http://127.0.0.1:8000/api/empleados

## Autoevaluación
1. ¿Cómo les fue en el examen?
R. Me fue regular, me falta ma practica con estas técnologias.
2. ¿Qué complicaciones tuvieron?.
R. El tiempo y el uso del framework Angular.
3. ¿Qué aprendieron en este módulo?
R. Aprendi mas las bondades del desarrollo web, y la importacia que tiene cada vez mas el separar el código en módulos independientes.
4. ¿Qué harían diferente si lo vuelven a realizar?
R. Mejoraria la UI, para hacer algo mas intuitivo, entendible y mas responsivo.