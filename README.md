<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Sobre el sistema

La evaluación docente es un sistema el cual tiene como objetivo, permitir que los alumnos puedan evaluar por medio de una encuesta
el desempeño de sus profesores.

## Caracteristicas del sistema 
 Login de autenticación, en el cual tanto usuarios con perfil de alumnos tanto como perfil de administrador, podran ingresar. 

 Los usuarios con perfil de alumnos, seran redigirigos a una vista en la cual se le mostraran todas sus materias. El alumno
 tendra que seleccionarlas para poder abrir la encuesta y contestarla. Al hacerlo, en el sistema se debe de almacenar
 la información que el alumno genero de cada una de las encuestas. 

 El panel de administrador, tiene como objetivo, mostrar de manera grafica, la información que se vaya generando en el sistema
 como por ejemplo, la cantidad de alumnos que hay, cantidad de alumnos que han contestado la encuesta, cantidad de alumnos
 que faltan por contestar las encuestas. Promedio por plantel. Profesores con peor calificación, profesores con mayor calificacion. 




## Dependencias
El sistema usara como dependencias externas, librerías como Spatie para manejar los roles y permisos 
Se usará Livewire para el desarrollo de algunos componentes especificos. 
Para el desarrollo de los gráficos, usaremos Chart.js


