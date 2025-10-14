<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Classes;
use App\Models\Matkul;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create Class
        $class = Classes::create([
            "class_name" => "TI-1A"
        ]);

        // Create User (PJ)
        User::create([
            "name" => "Admin",
            "email" => "ti1a25@gmail.com",
            "password" => Hash::make("tiamonika25"),
            "role" => "pj",
            "class_id" => $class->id
        ]);

        // Create Subjects (Mata Kuliah)
        $subjects = [
            "Pengantar Teknologi Informasi",
            "Desain Grafis dan Multimedia",
            "Etika Profesi & K3",
            "Sistem Operasi",
            "Bahasa Indonesia",
            "Algoritma dan Pemrograman",
            "Sistem Basis Data I",
            "Matematika Diskrit",
            "Arsitektur dan Organisasi Komputer"
        ];

        foreach ($subjects as $subject) {
            Matkul::create([
                "matkul_name" => $subject
            ]);
        }
    }
}