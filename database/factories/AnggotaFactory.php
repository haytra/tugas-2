<?php

namespace Database\Factories;

use App\Models\peminjaman;
use App\Models\ulasan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\anggota>
 */
class AnggotaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->name(),
            'alamat'=>fake()->address(),
            'nomor_telpon'=>fake()->phoneNumber(),
            'foto_profil'=>fake()->image(),
            'peminjaman_id'=>peminjaman::all()->fake()->id,
            'ulasan_id'=>ulasan::all()->fake()->id,
        ];
    }
}
