<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Models\Databank;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $nasabah = DB::table('nasabahs')->count();
        $bank = DB::table('databanks')->count();
         return view('admin.dashboard', compact('nasabah','bank'));
    }

    public function titikbank(Request $request)
    {
        $response = Databank::all();
        // $data = $response->json();

        return $response;
    }

    public function laporansampah(Request $request)
    {
        $lokasi = Databank::all();
        return view('admin.laporansampah', compact('lokasi'));
    }

    public function searchlaporan(Request $request)
    {
        $lokasi = $request->lokasi;
        
        $jmlsampah = DB::table('storans')
        ->where('storans.lokasi_id', $lokasi)
        ->whereBetween('storans.tgl_menabung', array($request->tgl1, $request->tgl2))
        ->sum('jml_tab_pergram');

        $laporan = DB::table('storans')
        ->join('databanks', 'storans.lokasi_id', '=', 'databanks.id')
        ->join('kategories', 'storans.kategori_id', '=', 'kategories.id')
        ->select('storans.*', 'databanks.nama_bank', 'kategories.kategori_sampah')
        ->where('storans.lokasi_id', $lokasi)
        ->whereBetween('storans.tgl_menabung', array($request->tgl1, $request->tgl2))
        ->get();

        return view('admin.hasillaporan', compact('laporan','jmlsampah'));
    }
}
