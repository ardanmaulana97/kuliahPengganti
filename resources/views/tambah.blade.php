<!DOCTYPE html>
<html>
<head>
	<title>Tambah</title>
</head>
<body>

	<h2><a href="#">#</a></h2>
	<h3>Data Jadwal</h3>

	<a href="/jadwal"> Kembali</a>
	
	<br/>
	<br/>

	<form action="/jadwal/store" method="post">
		{{ csrf_field() }}
		<!-- Nama <input type="text" name="nama"> <br/>
		Jabatan <input type="text" name="jabatan"> <br/>
		Umur <input type="number" name="umur"> <br/>
		Alamat <textarea name="alamat"></textarea> <br/>
		<input type="submit" value="Simpan Data"> -->

		hari <input type="text" name="hari"> <br/>
        waktuMulai <input type="text" name="waktuMulai"> <br/>
        waktuSelesai <input type="text" name="waktuSelesai"> <br/>
        namaMatkul <input type="text" name="namaMatkul"> <br/>
        tipeMatkul <input type="text" name="tipeMatkul"> <br/>
        kodeMatkul <input type="text" name="kodeMatkul"> <br/>
        paralel <input type="text" name="paralel"> <br/>
        pjMatkul <input type="text" name="pjMatkul"> <br/>
        lokasi <input type="text" name="lokasi"> <br/>
        namaRuang <input type="text" name="namaRuang"> <br/>
        kapasitasRuang <input type="text" name="kapasitasRuang"> <br/>
        pesertaMatkul <input type="text" name="pesertaMatkul"> <br/>
        semester <input type="text" name="semester"> <br/>
        semesterJadwal <input type="text" name="semesterJadwal"> <br/>

        <input type="submit" value="Simpan Data">
	</form>
		


</body>
</html>