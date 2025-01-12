<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil data dari database jika sudah ada
        $data = [
            'berita' => [], // Data berita
            'galeri' => [], // Data galeri
            'visi_misi' => [
                'visi' => 'Menjadi lembaga pendidikan unggul',
                'misi' => 'Menyelenggarakan pendidikan berkualitas dan berakhlak mulia',
            ],
        ];

        return view('home', $data);
    }
    public function kurikulum()
{
    $data = [
        'title' => 'Kurikulum',
        'description' => 'Deskripsi tentang kurikulum MI SGD Bandung.',
    ];
    return view('kurikulum', $data);
}

public function struktur()
{
    $data = [
        'title' => 'Struktur Organisasi',
        'description' => 'Struktur organisasi MI SGD Bandung.',
    ];
    return view('struktur', $data);
}

public function visi()
{
    $data = [
        'title' => 'Visi dan Misi',
        'visi' => 'Menjadi lembaga pendidikan unggul...',
        'misi' => '1. Menyelenggarakan pendidikan berkualitas...',
    ];
    return view('visi', $data);
}

public function extra()
{
    $data = [
        'title' => 'Extrakurikuler',
        'activities' => [
            'Pramuka',
            'Olahraga',
            'Seni Tari',
            'Paduan Suara',
        ],
    ];
    return view('ekstra', $data);
}
}

