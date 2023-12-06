 #install php unit
 laravel new phpunit

 #create new test
 php artisan make:test PageTest

 #unit and feature
 Una prueba unitaria es cuando tú pruebas una función en específico, es decir, algo muy específico que quieres saber que funciona, por ejemplo, suponiendo que tienes un programa que va a hornear un pastel, una prueba unitaria sería asegurarte que la masa se está horneando correctamente

 Una prueba de features es cuando tú pruebas ese conjunto de funciones, por ejemplo, cuando tú pruebas que realmente de tu cocina se está horneando un pastel, porque tus pruebas unitarias pueden estar bien, es decir, puede que la masa se esté haciendo bien y que el horno sí esté calentando, pero puede que de ahí estén saliendo galletas en lugar de un pastel, por eso la prueba de features es asegurarte que todas esas pequeñas funciones del sistema están trabajando bien entre sí :D

#all assertions o verificaciones que incluye la clase PhpUnit
https://phpunit.readthedocs.io/en/9.5/assertions.html

#filtros de php
https://www.php.net/manual/es/filter.filters.validate.php

#Crear un test unitario dentro de la carpeta Helpers
php artisan make:test Helpers/EmailTest --unit

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
