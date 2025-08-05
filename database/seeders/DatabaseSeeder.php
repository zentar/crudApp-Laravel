<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Producto;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Crear usuario administrador
        User::create([
            'name' => 'Administrador',
            'email' => 'admin@example.com',
            'password' => Hash::make('secret123'),
            'email_verified_at' => now(),
        ]);

        // Crear productos de ejemplo
        $productos = [
            [
                'nombre' => 'Laptop HP Pavilion',
                'descripcion' => 'Laptop de 15.6 pulgadas con procesador Intel i5, 8GB RAM, 512GB SSD',
                'precio' => 899.99,
                'stock' => 15,
            ],
            [
                'nombre' => 'Mouse Inalámbrico Logitech',
                'descripcion' => 'Mouse inalámbrico con sensor óptico de alta precisión, batería de larga duración',
                'precio' => 29.99,
                'stock' => 50,
            ],
            [
                'nombre' => 'Teclado Mecánico RGB',
                'descripcion' => 'Teclado mecánico con switches Cherry MX Blue, iluminación RGB personalizable',
                'precio' => 89.99,
                'stock' => 25,
            ],
            [
                'nombre' => 'Monitor Samsung 24"',
                'descripcion' => 'Monitor LED de 24 pulgadas, resolución Full HD 1920x1080, tiempo de respuesta 1ms',
                'precio' => 199.99,
                'stock' => 30,
            ],
            [
                'nombre' => 'Auriculares Sony WH-1000XM4',
                'descripcion' => 'Auriculares inalámbricos con cancelación de ruido activa, hasta 30 horas de batería',
                'precio' => 349.99,
                'stock' => 10,
            ],
            [
                'nombre' => 'Webcam Logitech C920',
                'descripcion' => 'Webcam HD 1080p con micrófono integrado, perfecta para videoconferencias',
                'precio' => 79.99,
                'stock' => 20,
            ],
            [
                'nombre' => 'Disco Duro Externo 1TB',
                'descripcion' => 'Disco duro externo portátil de 1TB, compatible con USB 3.0, transferencia rápida',
                'precio' => 59.99,
                'stock' => 40,
            ],
            [
                'nombre' => 'Cable HDMI 2.0',
                'descripcion' => 'Cable HDMI de alta velocidad, soporte para 4K y HDR, longitud 2 metros',
                'precio' => 12.99,
                'stock' => 100,
            ],
            [
                'nombre' => 'Soporte para Laptop',
                'descripcion' => 'Soporte ergonómico para laptop con ventilación integrada, ajustable en altura',
                'precio' => 45.99,
                'stock' => 35,
            ],
            [
                'nombre' => 'Limpieza para Pantalla',
                'descripcion' => 'Kit de limpieza para pantallas LCD/LED, incluye paño microfibras y solución limpiadora',
                'precio' => 8.99,
                'stock' => 75,
            ],
        ];

        foreach ($productos as $producto) {
            Producto::create($producto);
        }

        // Crear algunos usuarios adicionales de ejemplo
        User::create([
            'name' => 'Juan Pérez',
            'email' => 'juan@example.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
        ]);

        User::create([
            'name' => 'María García',
            'email' => 'maria@example.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
        ]);

        $this->command->info('✅ Usuario administrador creado: admin@example.com / secret123');
        $this->command->info('✅ 10 productos de ejemplo creados');
        $this->command->info('✅ 2 usuarios adicionales creados');
    }
}
