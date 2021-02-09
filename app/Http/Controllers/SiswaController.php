<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'telepon' => 'required|numeric|digits_between:10,12',
            'alamat' => 'required'
        ]);

        $siswa = new Siswa();
        $siswa->nama = $request-> nama;
        $siswa->telepon = $request-> telepon;
        $siswa->alamat = $request-> alamat;
        $siswa->save();

        return redirect(route('viewData'));
    }
    public function index(){
        $siswa = DB::table('siswa')->get();
        return view('dasis',['siswa'=> $siswa]);
    }
    public function edit($id)
    {
        $siswa = Siswa::find($id);
        return view('editData', compact('siswa'));

    }
    public function update(Request $request, $id)
    {
        Siswa::updateOrcreate(['id' => $id], $request->all());
        return redirect(route('viewData'));
    }
    public function delete($id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete();
        return redirect(route('viewData'));
    }
}
