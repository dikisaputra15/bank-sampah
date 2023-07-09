<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Databank;
use Illuminate\Support\Facades\DB;

class LokasiController extends Controller
{
    public function index(Request $request)
    {
        $lokasi = Databank::all();
        return view('admin.lokasi', compact('lokasi'));
    }

    public function addlokasi()
    {
        return view('admin.addlokasi');
    }

    public function storelokasi(Request $request)
    {

        $extension = $request->file('file')->extension();

        $waktu = time();

        $filename = $waktu.'.'.$extension;

        $request->file('file')->move(
            base_path() . '/public/document/', $filename
        );
        

        Databank::create([
            'nama_bank' => $request->nama_bank,
            'tgl_bergabung' => $request->tgl_bergabung,
            'lat' => $request->lat,
            'long' => $request->long,
            'path' => $filename
        ]);

        return redirect('admin/lokasi');
       
    }

    public function destroylokasi($id)
    {
        DB::table('databanks')->where('id',$id)->delete();
        return redirect('admin/lokasi');
    }

    public function editlokasi($id)
    {
        $lokasi = Databank::find($id);
        return view('admin.editlokasi', compact(['lokasi']));
    }

    public function updatelokasi(Request $request)
    {
        $id = $request->id_lok;

        $extension = $request->file('file')->extension();

        $waktu = time();

        $filename = $waktu.'.'.$extension;

        $request->file('file')->move(
            base_path() . '/public/document/', $filename
        );
        
        DB::table('databanks')->where('id',$id)->update([
            'nama_bank' => $request->nama_bank,
            'lat' => $request->lat,
            'long' => $request->long,
            'path' => $filename
		]);
        return redirect('admin/nasabah');
    }
}
