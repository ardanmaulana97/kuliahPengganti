<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Jadwal;

use Session;

use App\Exports\JadwalExport;
use App\Imports\JadwalImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class JadwalController extends Controller
{
	public function index()
	{
		$jadwal = Jadwal::all();
		return view('jadwal',['jadwal'=>$jadwal]);
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