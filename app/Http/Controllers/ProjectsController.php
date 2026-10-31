<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = [
            [
                'id' => 1,
                'title' => 'Sistem ERP',
                'description' => 'Sistem untuk membantu perusahaan mengelola proses bisnis secara terintegrasi.',
                'technologies' => ['Laravel', 'MySQL'],
            ],
            [
                'id' => 2,
                'title' => 'Sistem HRIS',
                'description' => 'Sistem untuk membantu pengelolaan data karyawan dan administrasi SDM.',
                'technologies' => ['Laravel', 'Bootstrap'],
            ],
            [
                'id' => 3,
                'title' => 'Sistem SCM',
                'description' => 'Sistem untuk membantu pengelolaan persediaan dan distribusi barang.',
                'technologies' => ['Laravel', 'MySQL'],
            ],
        ];

        return view('page.projects', compact('projects'));
    }

    public function show($id)
    {
        $projects = [
            1 => [
                'id' => 1,
                'title' => 'Sistem ERP',
                'description' => 'Sistem untuk membantu perusahaan mengelola proses bisnis secara terintegrasi.',
                'technologies' => ['Laravel', 'MySQL'],
            ],
            2 => [
                'id' => 2,
                'title' => 'Sistem HRIS',
                'description' => 'Sistem untuk membantu pengelolaan data karyawan dan administrasi SDM.',
                'technologies' => ['Laravel', 'Bootstrap'],
            ],
            3 => [
                'id' => 3,
                'title' => 'Sistem SCM',
                'description' => 'Sistem untuk membantu pengelolaan persediaan dan distribusi barang.',
                'technologies' => ['Laravel', 'MySQL'],
            ],
        ];

        if (!isset($projects[$id])) {
            abort(404);
        }

        return view('page.project-detail', [
            'project' => $projects[$id],
        ]);
    }
}