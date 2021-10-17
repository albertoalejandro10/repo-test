# Single-Page App en Laravel con Inertia.js y Vue.js

Single-Page Application de Actividades de viajes y reservar tickets con Laravel Inertia. Usando Laravel 8 y Vue 3. SPA es una aplicación web que interactúa de forma dinámica con el usuario rescribiendo la información de la página actual con nuevos datos del servidor, en lugar de ir a una página nueva.

## Instalación

Instalar dependencias

- Instalar node_modules y vendor

```bash
npm install
```
```bash
composer install
```

Deberas configurar el fichero .env, agregar unos nuevos datos para la base de datos.
Una vez realizado, puedes ejecutar las migraciones.

- Ejecutar Migrations
```bash
php artisan migrate --seed
```

## Uso
- Compilar el proyecto:
```bash
npm run dev
```
- Compilar el proyecto con watch (Observando cambios)
```bash
npm run watch
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)