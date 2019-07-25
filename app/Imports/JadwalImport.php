<?php

namespace App\Imports;

use App\Jadwal;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class JadwalImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Jadwal([
            //
            'hari'              => $row[0],
            'waktuMulai'        => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['1']),
            'waktuSelesai'      => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['2']),
            'namaMatkul'        => $row[3],
            'tipeMatkul'        => $row[4],
            'kodeMatkul'        => $row[5],
            'paralel'           => $row[6],
            'pjMatkul'          => $row[7],
            'lokasi'            => $row[8],
            'namaRuang'         => $row[9],
            'kapasitasRuang'    => $row[10], 
            'pesertaMatkul'     => $row[11], 
            'semester'          => $row[12],
            'semesterJadwal'    => $row[13],
        ]);
    }
}
