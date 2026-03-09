# FizzBuzz

### Descripción del problema:

Imagina la escena. Tienes once años y, en los cinco minutos antes de que termine la clase, tu profesor de matemáticas decide hacer la clase más "divertida" con un "juego". Explica que va a señalar a cada alumno por turnos y les pedirá que digan el siguiente número de la secuencia, empezando desde el uno. La parte "divertida" es que si el número es divisible entre tres, en su lugar dices "Fizz", y si es divisible entre cinco dices "Buzz". Así que tu profesor va señalando a tus compañeros y ellos gritan alegremente "¡uno!", "¡dos!", "¡Fizz!", "¡cuatro!", "¡Buzz!"… hasta que muy deliberadamente te señala a ti, clavándote una mirada de acero… el tiempo se detiene, se te seca la boca, las palmas te sudan cada vez más hasta que finalmente consigues decir "¡Fizz!". Catástrofe evitada, y el dedo sigue adelante.

Así que, para evitar pasar vergüenza delante de toda la clase, necesitas tener la lista completa impresa para saber qué decir. Tu clase tiene unos 33 alumnos y el profesor podría dar tres rondas antes de que suene el timbre del recreo. La próxima clase de matemáticas es el jueves. ¡A programar!

Escribe un programa que imprima los números del 1 al 100. Para los múltiplos de tres imprime "Fizz" en lugar del número, y para los múltiplos de cinco imprime "Buzz". Para los números que son múltiplos de tres y de cinco a la vez, imprime "FizzBuzz".

Salida de ejemplo:

1
2
Fizz
4
Buzz
Fizz
7
8
Fizz
Buzz
11
Fizz
13
14
FizzBuzz
16
17
Fizz
19
Buzz
... hasta 100

#### Fase 2 - Nuevos requisitos:

Un número es fizz si es divisible entre 3 o si contiene un 3
Un número es buzz si es divisible entre 5 o si contiene un 5

### Cómo empezar:

```bash
git clone https://github.com/540/FizzBuzz-php.git
cd FizzBuzz-php/
git checkout --track origin/initial_state
```

### Ejecución con Docker:

```bash
# Construir la imagen
docker build -t fizzbuzz-php .

# Entrar al contenedor
# Al entrar, si no existe vendor/, se instala automáticamente
docker run -it -v "$(pwd)":/app fizzbuzz-php bash

# Ejecutar los tests dentro del contenedor
vendor/bin/phpunit
```

### Ejecución local (requiere PHP 8.3+):

```bash
composer install
vendor/bin/phpunit
```
