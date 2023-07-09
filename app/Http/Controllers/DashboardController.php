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
}
