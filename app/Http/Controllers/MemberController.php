<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    // Menampilkan daftar member
    public function index()
    {
        $title = "Daftar Member Perpustakaan";
        $description = "Berikut adalah daftar member perpustakaan";
        $members = [
            'Nafisa Zachra',
            'Amirul Ichsandina',
            'Rizky Maulana',
            'Abdillah ',
            'Nanang Mulyadi'
        ];

        return view('members.index', compact ('title', 'description', 'members'));
    }

    public function show ($id)
    {
        return "ID member: " . $id;
    }
}
