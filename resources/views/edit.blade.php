<!DOCTYPE html>
<html>
<head>
	<title>Tambah</title>
</head>
<body>

	<h2><a href="#">#</a></h2>
	<h3>Edit Jadwal</h3>

	<a href="/jadwal"> Kembali</a>
	
	<br/>
	<br/>

	@foreach($jadwal as $p)
	<form action="/jadwal/update" method="post">
		{{ csrf_field() }}
		

		<input type="hidden" name="id" value="{{ $p->id }}"> <br/>
		hari <input type="text" required="required" name="hari" value="{{ $p->hari }}"> <br/>
        waktuMulai <input type="text" required="required" name="waktuMulai" value="{{ $p->waktuMulai }}"> <br/>
        waktuSelesai <input type="text" required="required" name="waktuSelesai" value="{{ $p->waktuSelesai }}"> <br/>
        namaMatkul <input type="text" required="required" name="namaMatkul" value="{{ $p->namaMatkul }}"> <br/>
        tipeMatkul <input type="text" required="required" name="tipeMatkul" value="{{ $p->tipeMatkul }}"> <br/>
        kodeMatkul <input type="text" required="required" name="kodeMatkul" value="{{ $p->kodeMatkul }}"> <br/>
        paralel <input type="text" required="required" name="paralel" value="{{ $p->paralel }}"> <br/>
        pjMatkul <input type="text" required="required" name="pjMatkul" value="{{ $p->pjMatkul }}"> <br/>
        lokasi <input type="text" required="required" name="lokasi" value="{{ $p->lokasi }}"> <br/>
        namaRuang <input type="text" required="required" name="namaRuang" value="{{ $p->namaRuang }}"> <br/>
        kapasitasRuang <input type="text" required="required" name="kapasitasRuang" value="{{ $p->kapasitasRuang }}"> <br/>
        pesertaMatkul <input type="text" required="required" name="pesertaMatkul" value="{{ $p->pesertaMatkul }}"> <br/>
        semester <input type="text" required="required" name="semester" value="{{ $p->semester }}"> <br/>
        semesterJadwal <input type="text" required="required" name="semesterJadwal" value="{{ $p->semesterJadwal }}"> <br/>


		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
</body>
</html>