## <p align="center">Índice</p> 
### <p align="right">Joaquín Blanco Contreras, Curso: ASIR2</p>

1.0. [ESTRUCTURA DE LA PÁGINA WEB](#ESTRUCTURA-DE-LA-PAGINA-WEB)
-    1.1. [PÁGINA DE INICIO](#PÁGINA-DE-INICIO)
-    1.2. [VER PRODUCTO](#VER-PRODUCTO)
-    1.3. [LOGIN USUARIO ADMIN](#LOGIN-USUARIO-ADMIN)
-    1.4. [LOGIN USUARIO COMÚN](#LOGIN-USUARIO-COMÚN)
-    1.5. [RELACIÓN DE TABLAS SQL](#RELACIÓN-DE-TABLAS-SQL)
2.0. [ESTRUCTURA DE CARPETAS](#ESTRUCTURA-DE-CARPETAS)
-    1.1. [PÁGINA DE INICIO](#PÁGINA-DE-INICIO)

## ESTRUCTURA DE LA PÁGINA WEB

Nuestra página web estará compuesta por una página de inicio, donde se verán los productos listados,también tendrá la opción de loguearnos como un usuario (admin o normal), podremos tener la posibilidad de poder ver un producto y la de añadir un carrito. También ver en el carrito los productos añadidos.

Tendremos dos roles, 1 (Administrador), 2(Usuario normal).
La elección de ser administrador nos permitirá acceder a un panel donde estarán los productos de nuestra tienda, y también mediante un pequeño formulario implementado tendrá la opción de poder crear un producto nuevo y poder borrar el producto que desee. 

La estética de la página web está implementada por bootstrap, css y html. 

## PÁGINA DE INICIO 

![imagen](https://github.com/JBC1994/PROYECTO_IAW/assets/120668110/13de4891-44ba-4281-b7f6-dc0c4e401046)


Está página esta implementada por una función llamada "VerPaginaInicial" ubicada en la página "ProductoController.php" , nos permite que gracias a un array de productos de la bbdd sacar todos los productos en una lista, de manera clara y concisa.

## VER PRODUCTO

![imagen](https://github.com/JBC1994/PROYECTO_IAW/assets/120668110/1772838c-e1bd-47a4-a315-21de046493ae)

Este apartado nos permite ver la funcionalidad del botón "ver producto", implementada en la clase "ProductoController" y llamada "getProductById" , que permite ver detalladamente la descripción del producto.

![imagen](https://github.com/JBC1994/PROYECTO_IAW/assets/120668110/21e6eb16-668f-43cc-91ba-f51202e3587f)

## LOGIN USUARIO ADMIN

![imagen](https://github.com/JBC1994/PROYECTO_IAW/assets/120668110/f272fcf8-35e3-4e98-a11b-9403d32f1858)

En este apartado hemos agregado un login de usuario controlando las sesiones, lo que nos permitirá ser un poco mas profesionales y más realistas a la hora de buscar productos en nuestra página web.
Hemos implementado un pequeño control de errores en el login, para advertir de que el nombre no es correcto, o de que los credenciales no son los apropiados.

Tendremos dos opciones como mencionamos anterioremente, en este apartado tendremos el "ADMINISTRADOR", esté tendrá el poder de crear productos nuevos y borrarlos.

![imagen](https://github.com/JBC1994/PROYECTO_IAW/assets/120668110/646b9a49-14a9-4725-88c5-e85340128ff0)

![imagen](https://github.com/JBC1994/PROYECTO_IAW/assets/120668110/4c9d9ae2-5ad7-4e2b-af60-db19a3b9b9e9)


Lo podremos corroborar en nuestra BBDD.

![imagen](https://github.com/JBC1994/PROYECTO_IAW/assets/120668110/4a1a5111-8f18-4f36-a6fe-efd94c41e8dd)

Ejemplo de añadir datos desde panel administrador a BBDD.

![imagen](https://github.com/JBC1994/PROYECTO_IAW/assets/120668110/170a3d01-1d3c-4fbc-ac8e-4cd6a06210ca)

Ahora veremos si esta añadido a nuestra pagina. 
![imagen](https://github.com/JBC1994/PROYECTO_IAW/assets/120668110/6517e6e0-daeb-4a4a-b286-06ccea617b2c)

![imagen](https://github.com/JBC1994/PROYECTO_IAW/assets/120668110/f75275e0-acef-4f8c-a67d-3f569dc3de62)

Ahora comprobamos si estamos en la BBDD.

![imagen](https://github.com/JBC1994/PROYECTO_IAW/assets/120668110/29e25899-4b6a-43bc-b75c-5fd83e4223bf)

ROL que le asignamos en la BBDD al admin junto con la función implementada en usercontroller, si es 1 es admin, sino un user normal.

![imagen](https://github.com/JBC1994/PROYECTO_IAW/assets/120668110/be099301-8d77-411f-8a02-39338b7f5384)


## LOGIN USUARIO COMÚN

![imagen](https://github.com/JBC1994/PROYECTO_IAW/assets/120668110/38b4c34a-641c-45fc-9ab7-9f0d0361c0f9)

![imagen](https://github.com/JBC1994/PROYECTO_IAW/assets/120668110/b49d879a-4db2-4d38-b0d3-179d7fb944de)

Esta página lo que hará que una vez insertado el login nos redirigirá a nuestra pagina de inicio.

## RELACIÓN DE TABLAS SQL

Por último está sería la relación de tablas que tenemos en nuestro proyecto. 

![RELACION_TABLAS_PROYECTO](https://github.com/JBC1994/PROYECTO_IAW/assets/120668110/d8a4d021-75b1-4fd2-b283-65244ffac9f6)



