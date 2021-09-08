# Curso de Programacion Orientada a Objetos

La programación orientada a objetos tiene cuatro características principales:
* **Encapsulamiento**. Quiere decir que oculta datos mediante código.
* **Abstracción**. Es como se pueden representar los objetos en modo de código.
* **Herencia**. Es donde una clase nueva se crea a partir de una clase existente.
* **Polimorfismo**. Se refiere a la propiedad por la que es posible enviar mensajes sintácticamente iguales a objetos de tipos distintos.

En este curso, los pasos a seguir será.
- Analisis: Observar, entender y leer muy bien el problema. Empezar a pensar de forma distinta.
- Plasmar: Diseñar y crear los diagramas, después de haber realizado el respectivo análisis.
- Programar: Programar el diagrama con cualquier lenguaje que soporte POO.

## ¿Que resuelve la POO?
Se dedica a resolver muchos problemas que la programación estructurada tiene. Problemas que resuelve:
- Código Largo
- Si algo falla todo se rompe
- Dificil de mantener
- Código spaguetti: Muchas sentencias de control anidadas y pérdidas de control sobre el código.

## Orientación a objetos
La Programación Orientada a Objetos viene de una filosofía o forma de pensar que es la **Orientación a Objetos** y esto surge a partir de los problemas que necesitamos plasmar en código.

Es analizar un problema en forma de objetos para después llevarlo a código, eso es la **orientación a objetos**

Un **paradigma** es una teória que suministra la base y modelo para resolver problemas. La paradigma de programación orientada a objetos se compone de 4 elementos:
* clases
* Propiedades
* Métodos
* Objetos

y cuatro pilares:
* Encapsulamiento
* Abstracción
* Herencia
* Polimorfismo

## Lenguajes Orientados a Objetos
* Java:
    - Orientado a Objetos naturalmente
    - Es muy útilizado en Android
    - Y es usado del lado del servidor o Server Side
* PHP
    - Lenguaje interpretado
    - Pensado para la Web
* Python
    - Diseñado para ser fácil de usar
    - Múltiples usos: Web, Server Side, Análisis de Datos, Machine Learning, etc
* Javascript
    - Lenguaje interpretado
    - Orientado a Objetos pero basado en prototipos
    - Pensado para la Web
* C#
* Ruby
* Kotlin

## Diagramas de modelado

* OMT: Object Modeling Techniques. Es una metodología para el análisis orientado a objetos.

* UML: Unified Modeling Language o Lenguaje de Modelado Unificado. Tomó las bases y técnicas de OMT unificándolas. Tenemos más opciones de diagramas como lo son Clases, Casos de Uso, Objetos, Actividades, Iteración, Estados, Implementación.

Libros:
https://drive.google.com/file/d/1zLWH_tcEq_SuBHDA39094l4MX59DJKbz/view

# UML
UML significa Unified Modeling Language el cual es un lenguaje estándar de modelado de sistemas orientados a objetos.

Esto significa que tendremos una manera gráfica de representar una situación, justo como hemos venido viendo. 
Los elementos que puedes utilizar para hacer estas representaciones son:

| Clase |
|-------|
|+ attribute1:type = defaultValue|
|+ attribute2:type|
|- attribute3:type|
|-----------------|
|+ operation1(param):returnType|
|- operation2(param)|
|- operation3()|

En la parte superior se colocan los atributos o propiedades, y debajo las operaciones de la clase. Notarás que el primer caracter con el que empiezan es un símbolo. Este denotará la visibilidad del atributo o método, esto es un término que tiene que ver con Encapsulamiento y veremos más adelante a detalle.

Estos son los niveles de visibilidad que puedes tener:
- ``-`` private
- ``+`` public
- ``#`` protected
- ``~`` default

Una forma de representar las relaciones que tendrá un elemento con otro es a través de las flechas en UML, y aquí tenemos varios tipos, estos son los más comunes:

### Asociación 
![](https://static.platzi.com/media/user_upload/associacion-d2e1b691-b6e9-4854-85e2-d3ffdf0a9049.jpg)

Como su nombre lo dice, notarás que cada vez que esté referenciada este tipo de flecha significará que ese elemento contiene al otro en su definición. La flecha apuntará hacia la dependencia.

![](https://static.platzi.com/media/user_upload/uml-relacion-asociacion-99b916c6-1f80-4b61-889a-ebf6e74f4f23.jpg)

Con esto vemos que la ClaseA está asociada y depende de la ClaseB.
### Herencia
![](https://static.platzi.com/media/user_upload/herencia-2eb98d5e-bcad-4162-b236-aa87eba20e76.jpg)

Siempre que veamos este tipo de flecha se estará expresando la herencia.

La dirección de la flecha irá desde el hijo hasta el padre.
![](https://static.platzi.com/media/user_upload/herencia-clases-53cb3117-def7-433f-adc5-4ad183d6b5e7.jpg)

Con esto vemos que la ClaseB hereda de la ClaseA
### Agregación
![](https://static.platzi.com/media/user_upload/agregacion-6489d946-cc06-4e3c-a976-f6435531b4f2.jpg)

Este se parece a la asociación en que un elemento dependerá del otro, pero en este caso será: Un elemento dependerá de muchos otros. Aquí tomamos como referencia la multiplicidad del elemento. Lo que comúnmente conocerías en Bases de Datos como Relaciones uno a muchos.

![](https://static.platzi.com/media/user_upload/uml-relacion-agregacion-adb20be8-d6c2-41d1-b002-2cfa37639240.jpg)

Con esto decimos que la ClaseA contiene varios elementos de la ClaseB. Estos últimos son comúnmente representados con listas o colecciones de datos.
### Composición
![](https://static.platzi.com/media/user_upload/composicion-1da1dd19-6925-42d9-9727-7fd8cb031b0c.jpg)

Este es similar al anterior solo que su relación es totalmente compenetrada de tal modo que conceptualmente una de estas clases no podría vivir si no existiera la otra.
![](https://static.platzi.com/media/user_upload/uml-relacion-composicion-2d4cb1fa-5422-44e3-849b-3a3e2d276733.jpg)

## Objetos
Cuando tengamos un problema lo primero que debemos hacer es **identificar los objetos**

Los **Objetos** son aquellos que tienen propiedades y comportamientos, también serán sustantivos. (Pueden ser Físicos o Conceptuales)

* Las **Propiedades** también pueden llamarse atributos y estos también serán sustantivos. Algunos atributos o propiedades son nombre, tamaño, forma, estado, etc. Son todas las características del objeto.

* Los **Comportamientos** serán todas las operaciones que el objeto puede hacer, suelen ser verbos o sustantivos y verbo. Algunos ejemplos pueden ser que el usuario pueda hacer login y logout.

Ejemplo:

Objeto: Perro

si pensamos como el tipico ejemplo del perrito tendriamos los siguientes valores.

|Atributos/propiedades|Comportamientos|
|---------------------|---------------|
|Nombre|Ladrar|
|Color|Comer|
|Raza|Dormir|
|Altura|Correr|

Sin embargo para entenderlo mejor demosle contexto al objeto

Tenemos un sistema de adopcion de perritos, este programa dispone de un catalogo de perritos disponibles para ser adoptados. Desde este punto de vista tendremos los siguientes valores.

|Atributos/propiedades|Comportamientos|
|---------------------|---------------|
|id    |serAdoptado()|
|Nombre|estarVacunado()|
|Color|estarCastrado()|
|Raza||
|Altura||

Aqui se agrega mas atributos y los comportamientos cambian pues viendo el contexto sus valores se adecuan a las necesidades de estas.

## Clase
Una Clase es el modelo por el cual nuestros objetos se van a construir y nos van a permitir generar más objetos.

Analizamos Objetos para crear Clases. Las Clases son los modelos sobres los cuales construiremos nuestros objetos.

Abstracción es cuando separamos los datos de un objeto para generar un molde.
## Modularidad
va muy relacionada con las clases y es un principio de la Programación Orientado a Objetos y va de la mano con el **Diseño Modular** que significa dividir un sistema en partes pequeñas y estas serán nuestros módulos pudiendo funcionar de manera independiente.

La modularidad de nuestro código nos va a permitir

- Reutilizar
- Evitar colapsos
- Hacer nuestro código más mantenible
- Legibilidad
- Resolución rápida de problemas

Una buena práctica es separando las clases en archivos diferentes.

## Análisis del proyecto
![](https://static.platzi.com/media/public/uploads/analizando-uber-en-objetos_7648b008-b099-4b0c-a511-a8be36bcd240.png)

Objetos a identificar
![](https://static.platzi.com/media/public/uploads/modelando-nuestros-objetos-uber-1_311f8882-9610-4198-aa89-3b86c2de62b2.png)
![](https://static.platzi.com/media/public/uploads/modelando-nuestros-objetos-uber-2_02bc1a0c-3810-48e4-947a-d05d00e3c230.png)


## UML
Se la representa de la siguiente forma
```
|Nombre de la Clase|-----> Identidad
|------------------|
|Atributo 1        |--
|Atributo 2        |  |--> Estado
|Atributo 3        |  |
|Atributo n        |--
|------------------|
|Operación 1       |--
|Operación 2       |  |--> Comportamientos
|Operación 3       |  |
|Operación n       |--
|------------------|
```
> **Don’t repeat yourself** es una filosofía que promueve la reducción de duplicación en programación, esto nos va a inculcar que no tengamos líneas de código duplicadas.

Toda pieza de información nunca debería ser duplicada debido a que incrementa la dificultad en los cambios y evolución
## Herencia

La herencia nos permite crear nuevas clases a partir de otras, se basa en modelos y conceptos de la vida real. También tenemos una jerarquía de padre e hijo.

### Aplicando la herencia 
![](https://static.platzi.com/media/public/uploads/aplicando-herencia-a-nuestro-proyecto-uber2_5ba149e0-9792-4e82-9430-84a44b7c1060.png)

![](https://static.platzi.com/media/public/uploads/aplicando-herencia-a-nuestro-proyecto-uber3_5e853a21-7760-4fc9-9842-3c74d390c0ba.png)

![](https://static.platzi.com/media/public/uploads/aplicando-herencia-a-nuestro-proyecto-uber1_bf088c4f-9198-4a8b-b91a-abe62debf181.png)

UML diagram, modelo simplificado del sistema uber

![](https://static.platzi.com/media/public/uploads/diagrama_10b7b328-fbde-4cc2-b758-0b31ec6f0260.jpg)


Los **objetos** nos ayudan a crear instancia de una clase, el objeto es el resultado de lo que modelamos, de los parámetros declarados y usaremos los objetos para que nuestras clases cobren vida.

Los **métodos constructores** dan un estado inicial al objeto y podemos añadirle algunos datos al objeto mediante estos métodos. Los atributos o elementos que pasemos a través del constructor serán los datos mínimos que necesita el objeto para que pueda vivir.