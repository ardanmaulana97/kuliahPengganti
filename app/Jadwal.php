<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = "jadwal";

    protected $fillable = [
    	'hari',
        'waktuMulai',
        'waktuSelesai',
        'namaMatkul',
        'tipeMatkul',
        'kodeMatkul',
        'paralel',
        'pjMatkul',
        'lokasi',
        'namaRuang',
        'kapasitasRuang',
        'pesertaMatkul',
        'semester',
		];
}

/*
						hari
                        waktuMulai
                        waktuSelesai
                        namaMatkul
                        tipeMatkul
                        kodeMatkul
                        paralel
                        pjMatkul
                        lokasi
                        namaRuang
                        kapasitasRuang
                        pesertaMatkul
                        semester
*/