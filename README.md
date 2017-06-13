# Diseño de Software: El Comelon

## Descripcion
La Asociación de Bares y Restaurantes de ESPOL desea crear una plataforma que les permita colocar todo su menú organizado por categorías y, además, permitirle a la comunidad politécnica poder buscar en ese catálogo para conocer en donde pueden comprar el platillo de su elección.

## Deployment

Para poder realizar un correcto deployment recomendamos utilizar [WAMP](www.wampserver.com/en/). Un ambiente local de desarrollo Web que integra Apache, PHP5 y MySQL.

1. Clone este repositorio.
```
git clone https://github.com/FabricioLayedra/DS2017-G6
```
2. Coloque el directorio clonado dentro de la carpeta `www` propia de WAMP. Usualmente localizada en `C:\\wamp\64`.

3. **Configurar la base de datos:** Ingrese las configuraciones de su MySQL local, editando el archivo `application/config/database.php`. Es decir: Hostname, Username & Password.

4. **Inicializar la base de datos:** En su gestor de MySQL tiene que ejecutar los comandos SQL que se encuentran en los archivos `sql/db-create.sql` y consecuentemente `sql/db-insert.sql`.

5. La aplicacion esta lista para ser utilizada accediendo a `localhost:PUERTO_LOCAL`.

### Dependencias

1. PHP5.
2. MySQL.
3. Apache.

### Credenciales

En la seccion de `Iniciar Sesion`, ingrese alguna de las siguientes credenciales dependiendo de las funcionalidades a probar:

> **Administrador:** lkuffo:admin
>
> **Asistente:** flayedra:admin
>
> **Asistente:** jlmasson:pepe
>
> **Cliente:** jvpincay:testeo
