<?php

namespace Database\Factories;

use App\Models\penulis;
use App\Models\anggota;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\pustakawan>
 */
class PustakawanFactory extends Factory
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
            'penulsi_id'=>penulis::all()->fake()->id,
            'anggota_id'=>anggota::all()->fake()->id,
        ];
    }
}
