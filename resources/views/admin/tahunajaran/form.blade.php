@extends('layouts.index')
@section('title','Form-Tahun Ajaran')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<h3>
				Form Tahun Ajaran
		  	</h3>
		  	<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/tahunajaran/form"><i class="fa fa-dashboard"></i> Form Tahun</a></li>
				<li class="breadcrumb-item"><a href="/admin/tahunajaran/tahunajaran"><i class="fa fa-dashboard"></i> Data Tahun</a></li>
		  	</ol>
		</div>

		 <!-- Basic Forms -->
            <!-- /.box-header -->
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
					<form method="POST" action="/admin/tahunajaran/tahunajaran/store">
                  {{ csrf_field() }}
                        <div class="box">
                            <div class="box-body">
                            <!-- Date -->
                            <div class="form-group">
                                <label>Tahun Ajaran</label>
                                <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" name="tahun_ajaran" class="form-control pull-right" id="tahun_ajaran" placeholder="Tahun Ajaran">
                                </div>
                                <!-- /.input group -->
                            </div>
                            <div class="text-xs-left">
                                <button type="submit" class="btn btn-rounded btn-info">Submit</button>
                            </div>
                            <!-- /.form group -->

                            </div>
                            <!-- /.box-body -->
                        </div>
				</div>
			</div>
		</section>
		<!-- /.content -->

	  </div>
  </div>
@endsection
