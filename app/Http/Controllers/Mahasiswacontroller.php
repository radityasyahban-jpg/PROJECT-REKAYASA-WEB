<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mahasiswacontroller extends Controller
{
    //
    public function index()
    //
    {
        $mahasiswa =[
            'nim' => '251011700864',
            'nama' => 'Adi Wangsa Raditya Syahban',
            'prodi' => 'Sistem Informasi',
            'email' => 'radityasyahban@gmail.com',
            'kampus' => 'Universitas Pamulang',
            'status' => 'Aktif'
        ];

        return view('mahasiswa', compact('mahasiswa'));
    }
}
