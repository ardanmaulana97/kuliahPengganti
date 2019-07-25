<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use App\Jadwal;

use Session;

use App\Exports\JadwalExport;
use App\Imports\JadwalImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class JadwalController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    
	public function index()
	{
		$jadwal = Jadwal::all();
		return view('jadwal',['jadwal'=>$jadwal]);
	}

	public function tambah()
	{
 
		// memanggil view tambah
		return view('tambah');
 
	}

	// method untuk insert data ke table Jadwal
	public function store(Request $request)
	{
		// insert data ke table Jadwal
		DB::table('jadwal')->insert([
			

			'hari'			=> $request -> hari,
	        'waktuMulai'		=> $request -> waktuMulai,	
	        'waktuSelesai'	=> $request -> waktuSelesai,
	        'namaMatkul'		=> $request -> namaMatkul,
	        'tipeMatkul'		=> $request -> tipeMatkul,
	        'kodeMatkul'		=> $request -> kodeMatkul,	
	        'paralel'		=> $request -> paralel,
	        'pjMatkul'		=> $request -> pjMatkul,
	        'lokasi'			=> $request -> lokasi,
	        'namaRuang'		=> $request -> namaRuang,
	        'kapasitasRuang'	=> $request -> kapasitasRuang,
	        'pesertaMatkul'	=> $request -> pesertaMatkul,
	        'semester'		=> $request -> semester,
	        'semesterJadwal'	=> $request -> semesterJadwal
		]);
		// alihkan halaman ke halaman jadwal
		return redirect('/jadwal');
 
	}

	// method untuk edit data jadwal
	public function edit($id)
	{
		// mengambil data jadwal berdasarkan id yang dipilih
		$jadwal = DB::table('jadwal')->where('id',$id)->get();
		// passing data jadwal yang didapat ke view edit.blade.php
		return view('edit',['jadwal' => $jadwal]);
 
	}
 
	// update data jadwal
	public function update(Request $request)
	{
		// update data jadwal
		DB::table('jadwal')->where('id',$request->id)->update([
			'hari'			=> $request -> hari,
	        'waktuMulai'		=> $request -> waktuMulai,	
	        'waktuSelesai'	=> $request -> waktuSelesai,
	        'namaMatkul'		=> $request -> namaMatkul,
	        'tipeMatkul'		=> $request -> tipeMatkul,
	        'kodeMatkul'		=> $request -> kodeMatkul,	
	        'paralel'		=> $request -> paralel,
	        'pjMatkul'		=> $request -> pjMatkul,
	        'lokasi'			=> $request -> lokasi,
	        'namaRuang'		=> $request -> namaRuang,
	        'kapasitasRuang'	=> $request -> kapasitasRuang,
	        'pesertaMatkul'	=> $request -> pesertaMatkul,
	        'semester'		=> $request -> semester,
	        'semesterJadwal'	=> $request -> semesterJadwal
		]);
		// alihkan halaman ke halaman jadwal
		return redirect('/jadwal');
	}
 
	// method untuk hapus data jadwal
	public function hapus($id)
	{
		// menghapus data jadwal berdasarkan id yang dipilih
		DB::table('jadwal')->where('id',$id)->delete();
		
		// alihkan halaman ke halaman jadwal
		return redirect('/jadwal');
	}







	public function export_excel()
	{
		return Excel::download(new JadwalExport, 'jadwal.xlsx');
	}

	public function import_excel(Request $request) 
	{
		// validasi
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);

		// menangkap file excel
		$file = $request->file('file');

		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();

		// upload ke folder file_siswa di dalam folder public
		$file->move('file_jadwal',$nama_file);

		// import data
		Excel::import(new JadwalImport, public_path('/file_jadwal/'.$nama_file));

		// notifikasi dengan session
		Session::flash('sukses','Data Jadwal Berhasil Diimport!');

		// alihkan halaman kembali
		return redirect('/jadwal');
	}
}