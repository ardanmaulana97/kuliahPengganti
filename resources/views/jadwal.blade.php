@extends('layouts.app')

@section('headerlink')
  

@endsection
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
              <li class="breadcrumb-item active">Jadwal Semester</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

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

    <div class="content">
      <div class="container-fluid">
        <!--@yield('content')-->
                    
        <!----------------- --------------------->
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Konfigurasi Jadwal Semester Departemen Ilmu Komputer</h3>

            </div>
            <!-- /.card-header -->
            <div class="card-body">
              
              <div class="row">
                <div class="col-md-6">
                  <label>Import Jadwal Semester</label>
                  <button type="button" class="btn btn-block btn-primary btn-sm" data-toggle="modal" data-target="#importExcel">IMPORT EXCEL</button>
                </div>
                <div class="col-md-6">
                  <label>Export Jadwal Semester</label>
                  <a href="/jadwal/export_excel" class="btn btn-block btn-success btn-sm" href="#" role="button" target="_blank">EXPORT EXCEL</a>
                </div>
              </div>  
            <div class="row">
              
              <!-- /.col -->
              <div class="col-md-6">
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Pilih Semester</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Semester Ganjil 2019/2020</option>
                    <option>Semester Genap 2019/2020</option>
                    <option disabled="disabled">Semester Ganjil 2018/2019</option>
                    <option disabled="disabled">Semester Genap 2018/2029</option>
                  </select>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
            <a href="/jadwal/tambah"> + Tambah 1 Jadwal Baru</a>
            </div>
          <!-- /.card-body -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped display nowrap">
                <thead>
                <tr>
                        <th>Hari</th>
                        <th>Mulai</th>
                        <th>Selesai</th>
                        <th>Nama Matkul</th>
                        <th>Tipe</th>
                        <th>Kode</th>
                        <th>Paralel</th>
                        <th>Penanggung Jawab</th>
                        <th>Lokasi</th>
                        <th>Ruang</th>
                        <th>Kapasitas</th>
                        <th>Peserta</th>
                        <th>Semester</th>
                        <th>Semester Jadwal</th>
                        <th>Aksi</th>
                      
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($jadwal as $s):  ?>
                <tr>
                        <td>{{$s->hari}}</td>
                        <td>{{substr($s->waktuMulai, -8, -3)}}</td>
                        <td>{{substr($s->waktuSelesai, -8, -3)}}</td>
                        <!-- substr($s->waktuSelesai, -11, 3)
                        substr ($getstring->string, -4) -->
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
                        <td>{{$s->semesterJadwal}}</td>
                        <td>
                          <a href="/jadwal/edit/{{ $s->id }}">Edit</a>
                          |
                          <a href="/jadwal/hapus/{{ $s->id }}">Hapus</a>
                        </td>
                
                </tr>
                  <?php endforeach  ?> 
                
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        <!-------------- --------------->
        <!-- Modal -->
          <!-- Import Excel -->
          <div class="modal fade" id="importExcel">
            <div class="modal-dialog" role="document">
              <form method="post" action="/jadwal/import_excel" enctype="multipart/form-data">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Import Jadwal</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">

                  {{ csrf_field() }}


                    <label>Pilih file excel</label>
                    <div class="form-group">
                      <input type="file" name="file" required="required">
                    </div>

                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Import</button>
                </div>
              </div>
            </form>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!--end of Modal -->




        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection


@section('script')

<!-- DataTables -->
<!-- <script src="{{ asset('lte/plugins/1/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('lte/plugins/1/jquery-3.3.1.js') }}"></script>
 -->

<script src="{{ asset('lte/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('lte/plugins/datatables/dataTables.bootstrap4.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('lte/plugins/fastclick/fastclick.js') }}"></script>

<script src="{{ asset('lte/dist/js/demo.js') }}"></script>

<script>
  $(function () {
    // $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "scrollX": true,
    });
  });

  // $('#example1').dataTable( {
  //   scrollY:        200,
  //   deferRender:    true,
  //   scroller:       true
  // } );

  $(document).ready(function() {
    $('#example1').DataTable( {
        "scrollX": true
    } );
} );
</script>
@endsection