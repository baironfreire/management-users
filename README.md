<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

<p align="center">
  <a href="https://github.com/laravel/framework/actions">
    <img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/l/laravel/framework" alt="License">
  </a>
</p>

## Gestión de Usuarios

Este proyecto, impulsado por tecnologías de vanguardia como PHP 8.2, MySQL 5.7, Livewire 3.4+, Docker y Laravel 11+, ofrece una solución completa y segura para la gestión de usuarios en aplicaciones web. Diseñado para la eficiencia y la escalabilidad, este sistema permite a los administradores crear, eliminar, actualizar y listar usuarios de manera intuitiva y eficaz.

### Características Principales

- **Seguridad Robusta**: Implementación de las mejores prácticas de seguridad para proteger los datos sensibles de los usuarios.

- **Interfaz de Usuario Dinámica**: Utilización de Livewire 3.4+ para una experiencia de usuario fluida y sin interrupciones.

- **Gestión Integral de Usuarios**: Funcionalidades completas para la creación, eliminación, actualización y listado de usuarios.

- **Escalabilidad Dockerizada**: Utilización de contenedores Docker para facilitar la implementación y el despliegue en entornos de desarrollo, prueba y producción.

- **Compatibilidad con las Últimas Versiones**: Construido con PHP 8.2 y Laravel 11+, garantizando compatibilidad con las últimas funcionalidades y mejoras de rendimiento.

Este proyecto ofrece una solución completa y confiable para la gestión de usuarios en aplicaciones web, permitiendo a los administradores administrar eficazmente los perfiles de usuario con total seguridad y facilidad de uso.

## Dependencias

- PHP 8.2
- MySQL 5.7
- Laravel 11+
- Livewire 3.4+
- Docker
- Docker Compose

## Instrucciones para Desplegar

1. **Clonar el Repositorio**: Clona el repositorio de GitHub en tu máquina local.
    ```bash
    git clone https://github.com/baironfreire/management-users.git
    ```

2. **Navega al directorio del proyecto**:
    ```bash
    cd management-users
    ```

3. **Crea un archivo .env**:
    Copia el archivo de ejemplo .env.example y configura las variables de entorno según tu configuración.
    ```bash
    cp .env.example .env
    ```

4. **Inicia los contenedores de Docker**:
    ```bash
    docker-compose up -d
    ```

5. **Instala las dependencias PHP utilizando Composer**:
    ```bash
    docker-compose exec app composer install
    ```

6. **Genera una nueva clave de aplicación**:
    ```bash
    docker-compose exec app php artisan key:generate
    ```

7. **Ejecuta las migraciones de la base de datos**:
    ```bash
    docker-compose exec app php artisan migrate
    ```
8. **Ejecuta apt install npm**:
    ```bash
    docker-compose exec app apt install npm 
    ```
9. **Ejecuta php artisan server --host=0.0.0.0 --port=8000**:
    ```bash
    docker-compose exec app php artisan serve --host=0.0.0.0 --port=8000 
    ```

10. **¡Listo!** Ahora puedes acceder a tu aplicación en [http://0.0.0.0:8000](http://0.0.0.0:8000).
