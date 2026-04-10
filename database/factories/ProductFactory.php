<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        $images = [
            'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?w=800&q=80',
            'https://images.unsplash.com/photo-1530124566582-a618bc2615dc?w=800&q=80',
            'https://images.unsplash.com/photo-1572981779307-38b8cabb2407?w=800&q=80',
            'https://images.unsplash.com/photo-1616423640778-28d1b53229bd?w=800&q=80',
            'https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?w=800&q=80',
            'https://images.unsplash.com/photo-1581092160562-40aa08e78837?w=800&q=80',
        ];
        
        static $index = 0;
        
        $names = [
            'Taladro Percutor Industrial 850W',
            'Sierra Circular Profesional 20V',
            'Rotomartillo Neumático SDS Max',
            'Esmeriladora Angular 4-1/2"',
            'Nivel Láser Tridimensional 50m',
            'Compresor de Aire 50L Silencioso'
        ];

        return [
            'name' => $names[$index % 6],
            'description' => 'Equipo de alto rendimiento diseñado específicamente para tolerar las jornadas más intensas de trabajo industrial, garantizando precisión, seguridad y durabilidad extrema.',
            'image_url' => $images[$index++ % 6],
            'price' => rand(1000, 15000),
            'is_active' => true,
        ];
    }
}
