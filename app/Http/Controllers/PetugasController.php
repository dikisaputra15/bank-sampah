<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PetugasController extends Controller
{
    public function index()
    {
        $petugas = Pegawai::all();
        return view('admin.petugas', compact('petugas'));
    }

    public function addpetugas()
    {
        return view('admin.addpetugas');
    }

    public function storepetugas(Request $request)
    {

        Pegawai::create([
            'nama_pegawai' => $request->nama_pegawai,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat
        ]);

        return redirect('admin/petugas');
       
    }

    public function destroypetugas($id)
    {
        DB::table('pegawais')->where('id',$id)->delete();
        return redirect('admin/petugas');
    }

    public function editpetugas($id)
    {
        $petugas = Pegawai::find($id);
        return view('admin.editpetugas', compact(['petugas']));
    }

    public function updatepetugas($id, Request $request)
    {
        $petugas = Pegawai::find($id);
        $petugas->update($request->except(['_token','submit']));
        return redirect('admin/petugas');
    }
}
