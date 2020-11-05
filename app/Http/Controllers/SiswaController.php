<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class SiswaController extends Controller
{
    public function store(Request $request)
    {

        $siswa = new Siswa();
        $siswa->nama = $request-> nama;
        $siswa->telepon = $request-> telepon;
        $siswa->alamat = $request-> alamat;
        $siswa->save();
    }
}
