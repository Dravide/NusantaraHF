<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Main\Produks>
 */
class ProduksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_produk' => fake()->name(),
            'harga' => fake()->randomNumber(200,300),
            'stok' => fake()->randomNumber(30,40),
            'kategori_id' => fake()->randomNumber(1,10),
            'gambar' => fake()->url(),
            'deskripsi' => fake()->text(200);
        ];
    }
}
