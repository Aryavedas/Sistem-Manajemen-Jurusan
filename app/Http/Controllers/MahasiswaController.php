<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function daftarMahasiswa()
    {
        return view('halaman',['judul' => 'Daftar Mahasiswa']);
    }

    public function tebelMahasiswa()
    {
        return view('halaman',['judul' => 'Tabel Mahasiswa']);
    }

    public function blogMahasiswa()
    {
        return view('halaman',['judul' => 'Blog Mahasiswa']);
    }
}
