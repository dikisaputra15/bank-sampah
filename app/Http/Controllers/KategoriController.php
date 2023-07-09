<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategorie;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    
    public function index()
    {
        $kategori = Kategorie::all();
        return view('admin.kategori', compact('kategori'));
    }

    public function addkategori()
    {
        return view('admin.addkategori');
    }

    public function storekategori(Request $request)
    {

        Kategorie::create([
            'kategori_sampah' => $request->kategori_sampah,
            'harga_pergram' => $request->harga_pergram
        ]);

        return redirect('admin/kategori');
       
    }

    public function destroykategori($id)
    {
        DB::table('kategories')->where('id',$id)->delete();
        return redirect('admin/kategori');
    }

    public function editkategori($id)
    {
        $kategori = Kategorie::find($id);
        return view('admin.editkategori', compact(['kategori']));
    }

    public function updatekategori($id, Request $request)
    {
        $kategori = Kategorie::find($id);
        $kategori->update($request->except(['_token','submit']));
        return redirect('admin/kategori');
    }
       
}
