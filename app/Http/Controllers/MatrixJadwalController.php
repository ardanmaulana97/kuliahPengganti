<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Jadwal;

use Session;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class MatrixJadwalController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){
    	$jadwal = Jadwal::all();
    	$senin 	= DB::table('jadwal')
                ->where('hari', '=', 'Senin')
                ->get();
    	$selasa = DB::table('jadwal')
                ->where('hari', '=', 'Selasa')
                ->get();
    	$rabu 	= DB::table('jadwal')
                ->where('hari', '=', 'Rabu')
                ->get();
    	$kamis 	= DB::table('jadwal')
                ->where('hari', '=', 'Kamis')
                ->get();
    	$jumat 	= DB::table('jadwal')
                ->where('hari', '=', 'Jumat')
                ->get();


		return view('matrixJadwal',['matrixJadwal'=>$jadwal, 
			'senin' => $senin,
			'selasa' => $selasa,
			'rabu' => $rabu,
			'kamis' => $kamis,
			'jumat' => $jumat
		]);
		// return view('matrixJadwal');
	}
}
