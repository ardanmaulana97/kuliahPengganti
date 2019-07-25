@extends('layouts.app')

@section('headerlink')
  

@endsection
@section('title') Matrix Jadwal @endsection 


@section('content')

<!-- Content Wrapper. Contains page content -->  
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Matrix Jadwal</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Matrix Jadwal</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

    <div class="content">
      <div class="container-fluid">
        <!--@yield('content')-->
                    
        <!----------------- --------------------->
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#matrixKuliah" data-toggle="tab">Matrix Kuliah</a></li>
                  <li class="nav-item"><a class="nav-link" href="#matrixLab" data-toggle="tab">Matrix Lab</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="matrixKuliah">
                    <!-- Post -->
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
                    <label>Senin</label>
<!-- SENIN -->
<?php
$connect=mysqli_connect("localhost","root","","pkl");
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$query = "SELECT t.waktuMulai, t.waktuSelesai, t.semester, t.namaMatkul FROM jadwal AS t";
$qresult = mysqli_query($connect,$query);
$rows = array();
$table = array();


$table['cols'] = array (
  array('id' => 'Semester', 'type' => 'string'),
  array('id' => 'Nama Mata Kuliah', 'type' => 'string'),
  array('id' => 'Start time', 'type' => 'date'),
  array('id' => 'End time', 'type' => 'date')
  );

while($res = mysqli_fetch_assoc($qresult)){
  $result[] = $res;
}

foreach ($result as $r) {

  $temp = array();
  $temp[] = array('v' => $r['semester']);
  $temp[] = array('v' => $r['namaMatkul']);
  $temp[] = array('v' => 'Date(0,0,0,'.date('H',strtotime($r['waktuMulai'])).','.date('i',strtotime($r['waktuMulai'])).','.date('s',strtotime($r['waktuMulai'])).')');
  $temp[] = array('v' => 'Date(0,0,0,'.date('H',strtotime($r['waktuSelesai'])).','.date('i',strtotime($r['waktuSelesai'])).','.date('s',strtotime($r['waktuSelesai'])).')');
  $rows[] = array('c' => $temp);

}
$table['rows'] = $rows;
$jsonTable = json_encode($table);
?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {
  callback: drawChart,
  packages: ['timeline']
});

function drawChart() {
  var dataTable = new google.visualization.DataTable(<?php echo $jsonTable; ?>);
  var container = document.getElementById('example');
  var chart = new google.visualization.Timeline(container);
  chart.draw(dataTable);
}
</script>
<div id="example" style="height: 3000px"></div>
<!-- /.SENIN -->
<!-- <label>Selasa</label>
<label>Rabu</label>
<label>Kamis</label>
<label>Jumat</label> -->

                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="matrixLab">
                    <!-- Post -->
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
                      <label>Senin</label>
<!-- SENIN -->
<!-- <?php
$connect=mysqli_connect("localhost","root","","pkl");
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$query = "SELECT t.waktuMulai, t.waktuSelesai, t.semester, t.namaMatkul FROM jadwal AS t ";
$qresult = mysqli_query($connect,$query);
$rows = array();
$table = array();


$table['cols'] = array (
  array('id' => 'Semester', 'type' => 'string'),
  array('id' => 'Nama Mata Kuliah', 'type' => 'string'),
  array('id' => 'Start time', 'type' => 'date'),
  array('id' => 'End time', 'type' => 'date')
  );

while($res = mysqli_fetch_assoc($qresult)){
  $result[] = $res;
}

foreach ($result as $r) {

  $temp = array();
  $temp[] = array('v' => $r['semester']);
  $temp[] = array('v' => $r['namaMatkul']);
  $temp[] = array('v' => 'Date(0,0,0,'.date('H',strtotime($r['waktuMulai'])).','.date('i',strtotime($r['waktuMulai'])).','.date('s',strtotime($r['waktuMulai'])).')');
  $temp[] = array('v' => 'Date(0,0,0,'.date('H',strtotime($r['waktuSelesai'])).','.date('i',strtotime($r['waktuSelesai'])).','.date('s',strtotime($r['waktuSelesai'])).')');
  $rows[] = array('c' => $temp);

}
$table['rows'] = $rows;
$jsonTable = json_encode($table);
?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {
  callback: drawChart,
  packages: ['timeline']
});

function drawChart() {
  var dataTable = new google.visualization.DataTable(<?php echo $jsonTable; ?>);
  var container = document.getElementById('example');
  var chart = new google.visualization.Timeline(container);
  chart.draw(dataTable);
}
</script>
<div id="example" style="height: 3000px"></div> -->
<!-- /.SENIN -->

                  </div>
                  <!-- /.tab-pane -->

                  
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            
        <!-------------- --------------->
        



        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
</div>
  <!-- /.content-wrapper -->
@endsection