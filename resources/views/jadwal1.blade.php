@extends('layouts.app')
@section('title') Jadwal @endsection 


@section('content')

<!-- Content Wrapper. Contains page content -->  
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Jadwal Semester</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Jadwal Semester Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
        <div class="card-body">
          <div class="callout callout-info bg-info">
            <h5>Selamat Datang 
                @if(\Auth::user())
                {{Auth::user()->name}}
                @endif
            </h5>

            <p>Untuk menggunakan Sistem Kuliah Pengganti harap diperhatikan bagian-bagian data inti yang perlu dipersiapkan sebelumnya sebelum siap digunakan.</p>
          </div>    
        </div>

    <div class="content">
      <div class="container-fluid">
        <!--@yield('content')-->
        <!----------------- --------------------->
        <div class="card card-default color-palette-box">
          <center>
      <h4>Import Excel Ke Database Dengan Laravel</h4>
    </center>

    {{-- notifikasi form validasi --}}
    @if ($errors->has('file'))
    <span class="invalid-feedback" role="alert">
      <strong>{{ $errors->first('file') }}</strong>
    </span>
    @endif

    {{-- notifikasi sukses --}}
    @if ($sukses = Session::get('sukses'))
    <div class="alert alert-success alert-block">
      <button type="button" class="close" data-dismiss="alert">×</button> 
      <strong>{{ $sukses }}</strong>
    </div>
    @endif

    <button type="button" class="btn btn-primary mr-5" data-toggle="modal" data-target="#importExcel">
      IMPORT EXCEL
    </button>

    <!-- Import Excel -->
    <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialogs" role="document">
        <form method="post" action="/jadwal/import_excel" enctype="multipart/form-data">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
            </div>
            <div class="modal-body">

              {{ csrf_field() }}

              <label>Pilih file excel</label>
              <div class="form-group">
                <input type="file" name="file" required="required">
              </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Import</button>
            </div>
          </div>
        </form>
      </div>
    </div>


    
    <a href="/jadwal/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>

    <table class='table table-bordered'>
      <thead>
        <tr>
                        <th>hari</th>
                        <th>waktuMulai</th>
                        <th>waktuSelesai</th>
                        <th>namaMatkul</th>
                        <th>tipeMatkul</th>
                        <th>kodeMatkul</th>
                        <th>paralel</th>
                        <th>pjMatkul</th>
                        <th>lokasi</th>
                        <th>namaRuang</th>
                        <th>kapasitasRuang</th>
                        <th>pesertaMatkul</th>
                        <th>semester</th>
        </tr>
      </thead>
      <tbody>
        @foreach($jadwal as $s)
        <tr>
                        <td>{{$s->hari}}</td>
                        <td>{{$s->waktuMulai}}</td>
                        <td>{{$s->waktuSelesai}}</td>
                        <td>{{$s->namaMatkul}}</td>
                        <td>{{$s->tipeMatkul}}</td>
                        <td>{{$s->kodeMatkul}}</td>
                        <td>{{$s->paralel}}</td>
                        <td>{{$s->pjMatkul}}</td>
                        <td>{{$s->lokasi}}</td>
                        <td>{{$s->namaRuang}}</td>
                        <td>{{$s->kapasitasRuang}}</td>
                        <td>{{$s->pesertaMatkul}}</td>
                        <td>{{$s->semester}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
          
                  
          <!-- /.card-body -->
        </div>
        <!-------------- --------------->





        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
