<?php

use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([
            'status_calon_siswa' => 'Pertimbangan',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('statuses')->insert([
            'status_calon_siswa' => 'Lolos',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('statuses')->insert([
            'status_calon_siswa' => 'Tidak Lolos',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
