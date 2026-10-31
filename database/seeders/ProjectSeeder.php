<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Sistem Informasi Akademik',
                'kategori' => 'Sistem Informasi',
                'description' => 'Aplikasi berbasis web untuk mengelola data mahasiswa, jadwal kuliah, dan nilai perkuliahan.',
                'teknologi' => 'Laravel & Bootstrap',
                'image' => 'sisteminformasi.jpg',
                'status' => 'active',
            ],
            [
                'title' => 'E-Commerce SEO Optimization',
                'kategori' => 'E-Commerce',
                'description' => 'Aplikasi optimalisasi struktur heading dan indexing halaman web toko online.',
                'teknologi' => 'PHP & Google Search Console',
                'image' => 'e-commerce.jpg',
                'status' => 'archived',
            ],
            [
                'title' => 'Aplikasi Manajemen Proyek',
                'kategori' => 'Manajemen',
                'description' => 'Aplikasi untuk mengelola proyek, tugas, dan kolaborasi tim secara efisien.',
                'teknologi' => 'Laravel & React',
                'image' => 'manajemenproyek.jpg',
                'status' => 'active',
            ],
        ];

        foreach ($projects as $project) {
            Project::updateOrCreate(
                ['title' => $project['title']],
                $project
            );
        }
    }
}