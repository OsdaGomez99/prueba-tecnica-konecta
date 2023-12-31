# Gestión de Cafetería KONECTA
Gestor de cafetería realizado en Laravel, para optar por la vacante de Analista de Desarrollo PHP para KONECTA

## Requisitos Previos
Asegúrate de tener instalados los siguientes componentes antes de comenzar:

- PHP >= versión 8.1
- Composer >= 2.5.7
- Laravel >= versión 10.10
- Node >= 18.16.0

## Instalación
Sigue estos pasos para configurar el proyecto en tu entorno local:

Clona este repositorio en tu máquina local:

```bash
git clone https://github.com/OsdaGomez99/prueba-tecnica-konecta.git
```

Navega hasta la carpeta del proyecto:

```bash
cd prueba-tecnica-konecta
```

Instala las dependencias de Laravel:

```bash
composer install
npm install
```

Crea un archivo .env basado en el archivo .env.example y configura las variables de entorno necesarias, como la conexión a la base de datos.

Genera una clave de aplicación única:

```bash
php artisan key:generate
```

Migra las tablas de la base de datos y inserta los datos de los seeders:

```bash
php artisan migrate
```

Inicia el servidor de desarrollo de Vite:

```bash
npm run dev
```

Inicia el servidor de desarrollo de Laravel:

```bash
php artisan serve
```

## Uso
Este aplicación, permite:
- Visualizar los productos y las ventas registrados
- Registrar, editar y eliminar productos
- Realizar ventas de productos

## Créditos
Realizado por: Osdalys Gómez

Medellin, Colombia

Julio 2023

## Contacto
- Correo Electrónico: osdalys.gomez99@hotmail.com
- Teléfono: +573002158524
- GitHub: **https://github.com/OsdaGomez99**
- Linkedin: **https://www.linkedin.com/in/osdalys-gomez**
