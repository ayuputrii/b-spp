@extends('layouts.index')
@section('title','Edit-Tahun Ajaran')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<h3>
				Form Edit Tahun Ajaran
		  	</h3>
		  	<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/tahunajaran/tahunajaran"><i class="fa fa-dashboard"></i> Data Tahun Ajaran</a></li>
		  	</ol>
        </div>
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    @foreach ($tahun_ajaran as $tahun_ajaran)
                        <form action="/admin/tahunajaran/tahunajaran/update/{{$tahun_ajaran->id_tahun}}" method="POST">
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
                                <input type="text" name="tahun_ajaran" class="form-control pull-right" value="{{$tahun_ajaran->tahun_ajaran}}">
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
                        </form>
                    @endforeach
				</div>
			</div>
		</section>
		<!-- /.content -->

	  </div>
  </div>
@endsection
