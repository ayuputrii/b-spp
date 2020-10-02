@extends('layouts.index')
@section('title','Form-Kelas')
@section('content')
	  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<h3>
				Form Kelas
		  	</h3>
		  	<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/kelas/form"><i class="fa fa-dashboard"></i> Form Kelas</a></li>
				<li class="breadcrumb-item"><a href="/admin/kelas/kelas"><i class="fa fa-dashboard"></i> Data Kelas</a></li>
		  	</ol>
		</div>

		 <!-- Basic Forms -->
            <!-- /.box-header -->
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                        <form method="POST" action="/admin/kelas/kelas/store">
                        {{ csrf_field() }}
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <h5>Nama Kelas<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="nama_kelas" class="form-control" placeholder="Nama Kelas" required data-validation-required-message="This field is required"> </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Kompetensi Keahlian <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="kompetensi_keahlian" class="form-control" placeholder="Kompetensi Keahlian" required data-validation-required-message="This field is required"> </div>
                                    </div>
                                </div>
                                <div class="text-xs-right">
                                    <button type="submit" class="btn btn-rounded btn-info">Submit</button>
                                </div>
                        </form>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
            </div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
@endsection
