# Sistema de Gestión de Productos - Laravel + Breeze

Un sistema completo de gestión de productos desarrollado con Laravel 11 y Breeze, que incluye autenticación, CRUD de productos y una interfaz moderna con Tailwind CSS.

## 🚀 Características

- ✅ **Autenticación completa** con Laravel Breeze
- ✅ **CRUD de productos** (Crear, Leer, Actualizar, Eliminar)
- ✅ **Interfaz moderna** con Tailwind CSS
- ✅ **Diseño responsive** que se adapta a todos los dispositivos
- ✅ **Validación de datos** en formularios
- ✅ **Mensajes de confirmación** para todas las operaciones
- ✅ **Navegación intuitiva** con menús dinámicos
- ✅ **Página de bienvenida** personalizada

## 📋 Requisitos Previos

- PHP >= 8.1
- Composer
- MySQL/PostgreSQL/SQLite
- Node.js y NPM (para compilar assets)

## 🛠️ Instalación

### 1. Clonar el repositorio
```bash
git clone https://github.com/zentar/crudApp-Laravel.git
cd crudApp
```

### 2. Instalar dependencias de PHP
```bash
composer install
```

### 3. Configurar variables de entorno
```bash
cp .env.example .env
php artisan key:generate
```

### 4. Configurar la base de datos
Edita el archivo `.env` con tus credenciales de base de datos:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=crudapp
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Ejecutar migraciones y seeders
```bash
php artisan migrate --seed
```

### 6. Instalar dependencias de Node.js y compilar assets
```bash
npm install
npm run dev
```

### 7. Iniciar el servidor de desarrollo
```bash
php artisan serve
```

## 👤 Credenciales de Acceso

Después de ejecutar los seeders, tendrás acceso con:

**Usuario Administrador:**
- Email: `admin@example.com`
- Contraseña: `secret123`

**Usuarios de ejemplo:**
- Email: `juan@example.com` / Contraseña: `password`
- Email: `maria@example.com` / Contraseña: `password`

## 📁 Estructura del Proyecto

```
crudApp/
├── app/
│   ├── Http/Controllers/
│   │   └── ProductoController.php    # Controlador de productos
│   └── Models/
│       └── Producto.php              # Modelo de productos
├── database/
│   ├── migrations/
│   │   └── create_productos_table.php # Migración de productos
│   └── seeders/
│       └── DatabaseSeeder.php        # Datos de ejemplo
├── resources/views/
│   ├── productos/                    # Vistas de productos
│   │   ├── index.blade.php          # Lista de productos
│   │   ├── create.blade.php         # Crear producto
│   │   ├── edit.blade.php           # Editar producto
│   │   └── show.blade.php           # Ver producto
│   └── welcome.blade.php            # Página de bienvenida
└── routes/
    └── web.php                      # Rutas de la aplicación
```

## 🎯 Funcionalidades

### Gestión de Productos
- **Listar productos** con tabla responsive
- **Crear nuevos productos** con validación
- **Editar productos** existentes
- **Ver detalles** de cada producto
- **Eliminar productos** con confirmación

### Autenticación
- **Registro de usuarios** nuevos
- **Inicio de sesión** seguro
- **Cerrar sesión**
- **Protección de rutas** para usuarios autenticados

### Interfaz de Usuario
- **Navegación dinámica** que se adapta al estado de autenticación
- **Mensajes de éxito/error** para todas las operaciones
- **Diseño responsive** para móviles y desktop
- **Componentes reutilizables** de Breeze

## 🎨 Tecnologías Utilizadas

- **Backend:** Laravel 11
- **Frontend:** Tailwind CSS
- **Autenticación:** Laravel Breeze
- **Base de datos:** MySQL/PostgreSQL/SQLite
- **Validación:** Laravel Validation
- **Assets:** Vite + NPM

## 📝 Datos de Ejemplo

El seeder incluye 10 productos de ejemplo:
- Laptop HP Pavilion
- Mouse Inalámbrico Logitech
- Teclado Mecánico RGB
- Monitor Samsung 24"
- Auriculares Sony WH-1000XM4
- Webcam Logitech C920
- Disco Duro Externo 1TB
- Cable HDMI 2.0
- Soporte para Laptop
- Limpieza para Pantalla

## 🔧 Comandos Útiles

```bash
# Ejecutar migraciones
php artisan migrate

# Ejecutar seeders
php artisan db:seed

# Limpiar caché
php artisan cache:clear
php artisan config:clear
php artisan view:clear

# Crear un nuevo producto (desde tinker)
php artisan tinker
Producto::create(['nombre' => 'Nuevo Producto', 'precio' => 99.99, 'stock' => 10]);
```

## 🚀 Despliegue

### Para producción:
1. Configurar variables de entorno de producción
2. Ejecutar `php artisan config:cache`
3. Ejecutar `npm run build`
4. Configurar el servidor web (Apache/Nginx)

## 🤝 Contribuir

1. Fork el proyecto
2. Crear una rama para tu feature (`git checkout -b feature/AmazingFeature`)
3. Commit tus cambios (`git commit -m 'Add some AmazingFeature'`)
4. Push a la rama (`git push origin feature/AmazingFeature`)
5. Abrir un Pull Request

## 📄 Licencia

Este proyecto está bajo la Licencia MIT. Ver el archivo `LICENSE` para más detalles.
