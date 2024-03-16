## <p align="center">Índice</p> 
### <p align="right">Joaquín Blanco Contreras, Curso: ASIR2</p>

1.0. [ESTRUCTURA DE LA PAGINA WEB](#ESTRUCTURA-DE-LA-PAGINA-WEB)
-    1.1. [Pagina de inicio](#Pagina-de-inicio)
-    1.2. [¿Qué es una VPC en AWS?](#Qué-es-una-VPC-en-AWS)
-    1.3. [Creación de VPC en AWS](#Creación-de-VPC-en-AWS)
-    1.4. [¿Qué es una EC2 en AWS?](#Qué-es-una-EC2-en-AWS)
-    1.5. [Creación de EC2 en AWS](#Creación-de-EC2-en-AWS)

## ESTRUCTURA DE LA PAGINA WEB

Nuestra página web estará compuesta por una página de inicio, donde se verán los productos listados,también tendrá la opción de loguearnos como un usuario (admin o normal), podremos tener la posibilidad de poder ver un producto y la de añadir un carrito. También ver en el carrito los productos añadidos.

Tendremos dos roles, 1 (Administrador), 2(Usuario normal).
La elección de ser administrador nos permitirá acceder a un panel donde estarán los productos de nuestra tienda, y también mediante un pequeño formulario implementado tendrá la opción de poder crear un producto nuevo y poder borrar el producto que desee. 

La estética de la página web está implementada por bootstrap, css y html. 

## PÁGINA DE INICIO 

![imagen](https://github.com/JBC1994/PROYECTO_IAW/assets/120668110/5d8de2d3-0479-4701-a22f-27b11387545b)

Está página esta implementada por una función llamada "VerPaginaInicial" ubicada en la página "ProductoController.php" , nos permite que gracias a un array de productos de la bbdd sacar todos los productos en una lista, de manera clara y concisa.

## VER PRODUCTO

![imagen](https://github.com/JBC1994/PROYECTO_IAW/assets/120668110/b88b9a87-05e4-463b-8e5f-a3d11ca4a384)

Este apartado nos permite ver la funcionalidad del botón "ver producto", implementada en la clase "ProductoController" y llamada "getProductById" , que permite ver detalladamente la descripción del producto.

![imagen](https://github.com/JBC1994/PROYECTO_IAW/assets/120668110/5d9d510e-84e9-4339-a32a-dd1313db0c07)

## LOGIN USUARIO ADMIN

![imagen](https://github.com/JBC1994/PROYECTO_IAW/assets/120668110/b97f5bdc-530c-4178-a208-1f7c127fb837)

En este apartado hemos agregado un login de usuario controlando las sesiones, lo que nos permitirá ser un poco mas profesionales y más realistas a la hora de buscar productos en nuestra página web.
Hemos implementado un pequeño control de errores en el login, para advertir de que el nombre no es correcto, o de que los credenciales no son los apropiados.

Tendremos dos opciones como mencionamos anterioremente, en este apartado tendremos el "ADMINISTRADOR", esté tendrá el poder de crear productos nuevos y borrarlos.

![imagen](https://github.com/JBC1994/PROYECTO_IAW/assets/120668110/7064ad05-7e5d-49a6-a549-357d53d3539b)
![imagen](https://github.com/JBC1994/PROYECTO_IAW/assets/120668110/c5b6c35c-b294-459c-89b8-efa9a3b3fb00)

Lo podremos corroborar en nuestra BBDD.
![imagen](https://github.com/JBC1994/PROYECTO_IAW/assets/120668110/43e9f5ef-565f-41b6-a1e3-c4eedd3b46eb)

Ejemplo de añadir datos desde panel administrador a BBDD.

![imagen](https://github.com/JBC1994/PROYECTO_IAW/assets/120668110/3a6996c9-2b66-475e-90eb-d019299439df)

![imagen](https://github.com/JBC1994/PROYECTO_IAW/assets/120668110/47ecc69b-51d3-46e6-adaa-87adbc598846)

![imagen](https://github.com/JBC1994/PROYECTO_IAW/assets/120668110/6517e6e0-daeb-4a4a-b286-06ccea617b2c)

ROL que le asignamos en la BBDD al admin junto con la función implementada en usercontroller, si es 1 es admin, sino un user normal.
![imagen](https://github.com/JBC1994/PROYECTO_IAW/assets/120668110/be099301-8d77-411f-8a02-39338b7f5384)


## LOGIN USUARIO COMÚN

![imagen](https://github.com/JBC1994/PROYECTO_IAW/assets/120668110/78350f99-80b4-40c6-a40d-adb87396421f)
![imagen](https://github.com/JBC1994/PROYECTO_IAW/assets/120668110/8f0966c9-82ea-422c-89b4-c831ce045ec9)



