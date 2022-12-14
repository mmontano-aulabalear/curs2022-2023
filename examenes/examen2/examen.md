# Segundo parcial 2022

* Entrega en un único zip con el formato <usuario-portal>.zip


1 (5p). Descomprime el archivo job-portal que se adjunta en el examen:

a) convierte los html a php y cambia los enlaces que apuntan al html para que apunten a los php

b) para cada sección, indicada con un comentario de `start` y `end` crea
un archivo include con el nombre de la sección en la carpeta `include`


c) Reemplaza en select de categorías de modo que el contenido se genere
a partir del archivo de configuración (`config.php`). El valor puede ser igual al texto.
Utiliza la siguiente información:

```php

$categorias = array(
    "Marketing",
    "Customer Service",
    "Human Resource",
    "Project Managemen",
    "Business Development",
    "Sales & Communication",
    "Teaching & Education",
    "Design & Creative"
);
```

d) Crear un array en el archivo de configuración para que se generen
de igual modo las localidades, emplea como localidades: Alcudia,
Palma, Binissalem, Lloseta, Santa Maria.


e) Crea variables para los datos de contacto y utilízalas para
imprimir los datos de contacto del pie de página.

2 (2p). Crea un xml válido con las ofertas de trabajo que figuran en la sección
de Job Listing y añade 2 trabajos nuevos con la siguiente información

* Programador Front, Palma, Jornada Parcial $120-$150, fecha: 12-dic-2022
* Técnico de sistemas, Sineu, Full Time, $200-$250, fecha: 05-dic-2022

A elegir:

3. (3p) A partir del archivo anterior, leelo en php y genera el contenido de la 
sección de Job Listing

3. (3p) Modifica el formulario de contacto para que se envíe la información
por POST a una página de gracias (`thanks.php`), con el mismo estilo que la web
y donde se impriman los datos enviados.
