<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert([
            [
                'nama' => 'Annida Rahma Nadhifa',
                'foto' => 'default.jpg',
                'background' => 'As an active student, I have a strong commitment to education and personal development. I am actively involved in various activities on and off-campus. I also have experience in organizations and have been involved in various committees and internships off-campus.',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
