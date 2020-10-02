@extends('layouts.index')
@section('title','Form-Edit')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<h3>
				Form Edit Kelas
		  	</h3>
		  	<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/kelas/kelas"><i class="fa fa-dashboard"></i> Data Kelas</a></li>
		  	</ol>
        </div>
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                @foreach ($kelas as $kelas)
                    <form method="POST" action="/admin/kelas/kelas/update/{{$kelas->id_kelas}}">
                    {{ csrf_field() }}
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <h5>Nama Kelas<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="nama_kelas" class="form-control" value="{{$kelas->nama_kelas}}" required data-validation-required-message="This field is required"> </div>
                                </div>
                                <div class="form-group">
                                    <h5>Kompetensi Keahlian <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="kompetensi_keahlian" class="form-control" value="{{$kelas->kompetensi_keahlian}}" required data-validation-required-message="This field is required"> </div>
                                </div>
                            </div>
                            <div class="text-xs-right">
                                <button type="submit" class="btn btn-rounded btn-info">Submit</button>
                            </div>
                    </form>
                @endforeach
				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->

   <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
		  <li class="nav-item">
			<a class="nav-link" href="javascript:void(0)">FAQ</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="#">Purchase Now</a>
		  </li>
		</ul>
    </div>
	  &copy; 2019 <a href="https://www.multipurposethemes.com/">Multi-Purpose Themes</a>. All Rights Reserved.
  </footer>
@endsection
