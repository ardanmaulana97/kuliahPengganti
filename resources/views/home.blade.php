@extends('layouts.app')


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

    <div class="content">
      <div class="container-fluid">
        <!--@yield('content')-->
        <!----------------- --------------------->
        <div class="card card-default color-palette-box">
          
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-tag"></i>
              Penting!!
            </h3>
          </div>

          <div class="card-body">
            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            You are logged in!
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
