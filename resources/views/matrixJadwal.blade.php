@extends('layouts.app')
@section('title') Dashboard @endsection 


@section('content')

<!-- Content Wrapper. Contains page content -->  
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard Page</li>
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


          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#kuliah" data-toggle="tab">Matrix Kuliah</a></li>
                  <li class="nav-item"><a class="nav-link" href="#lab" data-toggle="tab">Matrix Lab</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="kuliah">
                    <!-- Post -->
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <script type="text/javascript">
                      google.charts.load('current', {'packages':['timeline']});
                      google.charts.setOnLoadCallback(drawChart);
                      function drawChart() {
                        var container = document.getElementById('timeline');
                        var chart = new google.visualization.Timeline(container);
                        var dataTable = new google.visualization.DataTable();

                        dataTable.addColumn({ type: 'string', id: 'President' });
                        dataTable.addColumn({ type: 'date', id: 'Start' });
                        dataTable.addColumn({ type: 'date', id: 'End' });
                        dataTable.addRows([
                          [ 'Washington', new Date(1789, 3, 30), new Date(1797, 2, 4) ],
                          [ 'Adams',      new Date(1797, 2, 4),  new Date(1801, 2, 4) ],
                          [ 'Jefferson',  new Date(1801, 2, 4),  new Date(1809, 2, 4) ]]);

                        chart.draw(dataTable);
                      }
                      </script>

                      <div id="timeline" style="height: 180px;"></div>
                    <!-- /.post -->
                  </div>
                </div>
              </div>

              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="lab">
                    <!-- Post -->
                    <!-- /.post -->
                  </div>
                </div>
              </div>

            </div>
          </div>




    <div class="content">
      <div class="container-fluid">
        <!--@yield('content')-->
        <!----------------- --------------------->
        <div class="card card-default color-palette-box">
          
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-tag"></i>
              Matrix Jadwal
            </h3>
          </div>

          <div class="card-body">
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
              google.charts.load('current', {'packages':['timeline']});
              google.charts.setOnLoadCallback(drawChart);
              function drawChart() {
                var container = document.getElementById('timeline');
                var chart = new google.visualization.Timeline(container);
                var dataTable = new google.visualization.DataTable();

                dataTable.addColumn({ type: 'string', id: 'President' });
                dataTable.addColumn({ type: 'date', id: 'Start' });
                dataTable.addColumn({ type: 'date', id: 'End' });
                dataTable.addRows([
                  [ 'Washington', new Date(1789, 3, 30), new Date(1797, 2, 4) ],
                  [ 'Adams',      new Date(1797, 2, 4),  new Date(1801, 2, 4) ],
                  [ 'Jefferson',  new Date(1801, 2, 4),  new Date(1809, 2, 4) ]]);

                chart.draw(dataTable);
              }
              </script>

              <div id="timeline" style="height: 180px;"></div>
          </div>
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

@section('script')
<script src="{{ asset('lte/plugins/fastclick/fastclick.js"></script>
@endsection