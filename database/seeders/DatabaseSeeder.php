<?php

namespace Database\Seeders;

use App\Models\buku;
use App\Models\User;
use App\Models\ulasan;
use App\Models\anggota;
use App\Models\penulis;
use App\Models\rakbuku;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\peminjaman;
use App\Models\pustakawan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       
        $pustakawans = pustakawan::factory(3)->create();

        foreach ($pustakawans as $pustakawan) {
            $anggotas = anggota::factory(3)->create(['pustakawan_id' => $pustakawan->id]);

            foreach ($anggotas as $anggota) {
                $peminjamans = peminjaman::factory(3)->create(['anggota_id' => $anggota->id]);

                foreach ($peminjamans as $peminjaman) {
                    $ulasans = ulasan::factory(3)->create(['peminjaman_id' => $peminjaman->id]);

                    // foreach ($kecamatans as $kecamatan) {
                    //     $desas = Desa::factory(3)->create(['kecamatan_id' => $kecamatan->id]);

                        foreach ($ulasans as $ulasan) {
                            $rakbukus = rakbuku::factory(10)->create(['ulasan_id' => $ulasan->id]);

                            for ($i = 0; $i < count($rakbukus); $i++) {
                                penulis::factory()->create();
                                buku::factory()->create();
                                User::factory()->create();
                                // rakable::factory()->create();
                            }

                        }
                    }
                }
            }


        }
    }
    
