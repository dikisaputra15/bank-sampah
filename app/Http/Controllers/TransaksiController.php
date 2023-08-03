<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Nasabah;
use App\Models\Kategorie;
use App\Models\User;
use App\Models\Storan;
use App\Models\Pegawai;
use App\Models\Tabungan;
use App\Models\Databank;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    public function setoran(Request $request)
    {
        $nasabah = Nasabah::all();
        return view('admin.setoran', compact('nasabah'));
    }

    public function penarikan(Request $request)
    {
        $nasabah = Nasabah::all();
        return view('admin.penarikan', compact('nasabah'));
    }

    public function pilihnasabah($id)
    {
        $nasabah = Nasabah::find($id);
        $user_id = $nasabah->user_id;
        $kategori = Kategorie::all();
        $petugas = Pegawai::all();
        $lokasi = Databank::all();
        $setoran = DB::table('storans')
        ->join('kategories', 'storans.kategori_id', '=', 'kategories.id')
        ->select('storans.*', 'kategories.kategori_sampah')
        ->where('storans.nasabah_id', '=', $user_id)
        ->get();
        return view('admin.pilihnasabah', compact(['nasabah','kategori','setoran','petugas','lokasi']));
    }

    public function stortabungan(Request $request)
    {
        $nasabah_id = $request->nasabah_id;
        $user_id = $request->user_id;
        
        $kategori_id = $request->kategori;
        $petugas = $request->petugas;
        $jml_tab = $request->jml_tab;
        $lokasi = $request->lokasi;
        
        $kategori = Kategorie::find($kategori_id);
        $harga_pergram = $kategori->harga_pergram;
        
        $total_tabungan = $harga_pergram * $jml_tab;
        $tgl_hariini = date('Y-m-d');
        
       $stor = Storan::create([
            'nasabah_id' => $user_id,
            'kategori_id' => $kategori_id,
            'lokasi_id' => $lokasi,
            'tgl_menabung' => $tgl_hariini,
            'harga_pergram' => $harga_pergram,
            'jml_tab_pergram' => $jml_tab,
            'total_tabungan' => $total_tabungan
        ]);

        if($stor){

            Tabungan::create([
                'nasabah_id' => $user_id,
                'petugas_id' => $petugas,
                'lokasi_id' => $lokasi,
                'tgl_tab' => $tgl_hariini,
                'kredit' => $total_tabungan,
                'debit' => 0
            ]);
        }

        return redirect('admin/'."{$nasabah_id}".'/pilihnasabah');
    }

    public function editsetoran($id)
    {
        $kategori = Kategorie::all();
        $setoran = Storan::find($id);
        $petugas = Pegawai::all();
        $lokasi = Databank::all();
        return view('admin.editsetoran', compact(['setoran','kategori','petugas','lokasi']));
    }

    public function updatesetoran(Request $request)
    {
        $id = $request->id_storan;
        $nasabah_id = $request->user_id;
        $petugas = $request->petugas;

        $user_id = DB::table('nasabahs')
        ->where('user_id', '=', $nasabah_id)
        ->first();

        $tab_id = DB::table('tabungans')
        ->where('nasabah_id', '=', $nasabah_id)
        ->first();

        $user = $user_id->id;
        $id_tab = $tab_id->id;

        $kategori_id = $request->kategori;
        $jml_tab = $request->jml_tab;
        $lokasi = $request->lokasi;
        
        $kategori = Kategorie::find($kategori_id);
        $harga_pergram = $kategori->harga_pergram;
        
        $total_tabungan = $harga_pergram * $jml_tab;
        $tgl_hariini = date('Y-m-d');

        $stor = DB::table('storans')->where('id',$id)->update([
            'nasabah_id' => $nasabah_id,
            'kategori_id' => $kategori_id,
            'lokasi_id' => $lokasi,
            'tgl_menabung' => $tgl_hariini,
            'harga_pergram' => $harga_pergram,
            'jml_tab_pergram' => $jml_tab,
            'total_tabungan' => $total_tabungan
		]);

        if($stor){
            DB::table('tabungans')->where('id',$id_tab)->update([
                'nasabah_id' => $nasabah_id,
                'petugas_id' => $petugas,
                'lokasi_id' => $lokasi,
                'tgl_tab' => $tgl_hariini,
                'kredit' => $total_tabungan,
                'debit' => 0
            ]);
        }

        return redirect('admin/'."{$user}".'/pilihnasabah');
    }

    public function penarikanuang($id)
    {
        $user_id = Auth::user()->id;
        $lokasi_bank = DB::table('databanks')->where('teller_id', $user_id)->first();

        $lokasi = Databank::all();
        $nasabah = Nasabah::find($id);
        $id = $nasabah->user_id;
        $petugas = Pegawai::all();
        $kredit = DB::table('tabungans')
        ->where('nasabah_id', '=', $id)
        ->sum('kredit');
        $debit = DB::table('tabungans')
        ->where('nasabah_id', '=', $id)
        ->sum('debit');
        $saldo = $kredit - $debit;

        $tarik = DB::table('tabungans')
        ->join('pegawais', 'tabungans.petugas_id', '=', 'pegawais.id')
        ->join('nasabahs', 'tabungans.nasabah_id', '=', 'nasabahs.id')
        ->select('tabungans.*', 'pegawais.nama_pegawai', 'nasabahs.nama_nasabah')
        ->where('tabungans.nasabah_id', '=', $id)
        ->get();
       
        return view('admin.penarikanuang', compact(['nasabah','saldo','petugas','tarik','lokasi','lokasi_bank']));
    }

    public function tarikuang(Request $request)
    {
        $nasabah_id = $request->nasabah_id;
        $user_id = $request->user_id;
        $kategori_id = $request->kategori;
        $petugas = $request->petugas;
        $jml_tab = $request->jml_tab;
        $lokasi = $request->lokasi;
        $saldo = $request->saldo;
        $tgl_hariini = date('Y-m-d');

        if($jml_tab > $saldo){
            return redirect('admin/'."{$nasabah_id}".'/penarikanuang')->with('alert-danger','Saldo tidak cukup');
        }else{
            Tabungan::create([
                'nasabah_id' => $user_id,
                'petugas_id' => $petugas,
                'lokasi_id' => $lokasi,
                'tgl_tab' => $tgl_hariini,
                'kredit' => 0,
                'debit' => $jml_tab
            ]);
        }

        return redirect('admin/'."{$nasabah_id}".'/penarikanuang');
    }

    public function lihattabungan(Request $request)
    {
        $user_id = Auth::user()->id;
        
        $nasabah = DB::table('nasabahs')
        ->where('user_id', '=', $user_id)
        ->first();

        $kredit = DB::table('tabungans')
        ->where('nasabah_id', '=', $user_id)
        ->sum('kredit');
        $debit = DB::table('tabungans')
        ->where('nasabah_id', '=', $user_id)
        ->sum('debit');
        $saldo = $kredit - $debit;

        $tarik = DB::table('tabungans')
        ->where('tabungans.nasabah_id', $user_id)
        ->get();

        if($nasabah == null){
            return view('admin.bukarek');
        }else{
            return view('admin.lihattabungan', compact(['nasabah','saldo','tarik']));
        }
    }
}
