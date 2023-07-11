# Prueba: Lista de Tareas

Prueba de nivel intermedio

## Tecnologías
- PHP
- Laravel
- Composer
- MySQL
- Node.js
- Vue 3
- Vite

## Requerimientos para reproducción
- Descargar e Instalar [GitHub CLI](https://cli.github.com/)
- Descargar e Instalar PHP y MySQL, yo he utilizado [XAMPP](https://www.apachefriends.org/es/download.html) (PHP 8.2.4) como entorno
- Dentro de la carpeta `C:\xampp\php`, habilitar la extensión zip en el archivo `php.ini` de PHP si es necesario para habilitar la instalación de los paquetes de composer
- Descargar e instalar [Composer](https://getcomposer.org/download/) (2.5.8)
- Descargar e instalar [Node.js](https://nodejs.org/en/download) (18.16.1)
- Instalar PNPM utilizando el comando `npm install pnpm@latest -g`

## Pasos de instalación del proyecto
1. Clonar el repositorio de GitHub.

```sh
gh repo clone Yizack/prueba-intermedio-tareas
```

2. Cambiar de directorio

```sh
cd prueba-intermedio-tareas
```

3. Para instalar paquetes de composer del proyecto ejecutar

```sh
composer install
```

4. Comando para instalar paquetes npm utilizando PNPM

```sh
pnpm install
```

5. Renombrar el archivo `.env.example` a `.env` para hacer uso de las variables de entorno.

## Pasos para ejecutar el proyecto

Para la ejecución del proyecto se necesitará realizar los siguientes pasos.

1. Iniciar Apache y MySQL por ejemplo en XAMPP

![xampp](/images/xampp.jpg)

2. Abrir una consola en el directorio del proyecto y ejecutar el siguiente comando para realizar la migración de la base de datos

```sh
php artisan migrate
```

3. Ejecutar la build de Vue con Vite

```sh
pnpm build
```

3. Para iniciar el servidor, ejecutar

```sh
php artisan serve
```

4. Acceder a la dirección http://localhost:8000 en el navegador.

## Desarrollo

Para realizar cambios en entorno de desarrollo

1. Ejecutar el comando de entorno de desarrollo de Vite

```sh
pnpm dev
```

2. En otra consola sin cerrar la consola anterior, ejectuar el servidor

```sh
php artisan serve
```
