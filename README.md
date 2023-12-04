<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Proyecto RRHH

## Dependencias:

Asegúrate de tener instaladas las siguientes dependencias antes de ejecutar el proyecto:

1. [Node.js](https://nodejs.org/)
2. [XAMPP](https://www.apachefriends.org/index.html) u otra solución similar para el servidor local
3. [Composer](https://getcomposer.org/)
4. [Laravel](https://laravel.com/)

## Instalación:

1. Clona el repositorio:

   ```bash
   git clone https://github.com/javier-hackaboss/RRHH.git
   ```

2. Accede al directorio del proyecto:

   ```bash
   cd RRHH
   ```

3. Instala las dependencias del servidor y del cliente:

   ```bash
   composer install
   npm install
   ```

## Configuración:

1. Copia el archivo `.env.example` y crea un nuevo archivo llamado `.env`:

   ```bash
   cp .env.example .env
   ```

2. Abre el archivo `.env` en tu editor de texto y configura la conexión a la base de datos:

   Ejemplo de configuración para env:

   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nombre_de_tu_base_de_datos
   DB_USERNAME=nombre_de_usuario
   DB_PASSWORD=contraseña
   ```

## Configuración del Servidor Apache:

1. Configura un nuevo sitio virtual en tu servidor Apache apuntando al directorio `public` del proyecto Laravel.

   Ejemplo de configuración para Apache:

   ```apache
   <VirtualHost *:80>
       ServerAdmin webmaster@tu_proyecto
       DocumentRoot "ruta_absoluta/tu_proyecto/public"
       ServerName tu_proyecto.local
       ErrorLog "logs/tu_proyecto-error.log"
       CustomLog "logs/tu_proyecto-access.log" common
   </VirtualHost>
   ```

   Asegúrate de reemplazar `"ruta_absoluta/tu_proyecto"` con la ruta real en tu sistema.

2. Agrega una entrada en el archivo `hosts` para apuntar al servidor local:

   En sistemas Unix/Linux, el archivo `hosts` generalmente se encuentra en `/etc/hosts`.

   ```bash
   sudo nano /etc/hosts
   ```

   Agrega la siguiente línea al final del archivo:

   ```
   127.0.0.1   tu_proyecto.local
   ```

   Guarda y cierra el archivo.

3. Reinicia tu servidor Apache para que los cambios surtan efecto.

## Uso:

1. Inicia tu servidor local (XAMPP, por ejemplo).
2. Ejecuta las migraciones para crear las tablas de la base de datos:

   ```bash
   php artisan migrate
   ```

3. Accede a tu proyecto en el navegador usando la URL configurada, por ejemplo, `http://tu_proyecto.local`.

3.2 Inicia el servidor de desarrollo de Laravel sin configurar Apache (no comprobado):

   ```bash
   php artisan serve
   ```

   Esto iniciará el servidor en `http://127.0.0.1:8000/`. Accede a esa dirección en tu navegador para ver la aplicación.
