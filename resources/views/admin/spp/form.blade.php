@extends('layouts.index')
@section('title','Form-SPP')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<h3>
				Form SPP
		  	</h3>
		  	<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/spp/form"><i class="fa fa-dashboard"></i> Form SPP</a></li>
				<li class="breadcrumb-item"><a href="/admin/spp/spp"><i class="fa fa-dashboard"></i> Data SPP</a></li>
		  	</ol>
		</div>

		 <!-- Basic Forms -->
            <!-- /.box-header -->
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                        <form action="/admin/spp/spp/store" method="POST">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <h5>Tahun Ajaran<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="id_tahun" class="form-control" placeholder="Tahun Ajaran" required>
                                        @foreach ($tahun_ajaran as $tahun_ajaran)
                                            <option value = "{{ $tahun_ajaran->id_tahun}}">{{$tahun_ajaran->tahun_ajaran}}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Nominal <span class="text-danger">*</span></h5>
                                    <div class="input-group"> <span class="input-group-addon">$</span>
                                        <input type="number" name="nominal" class="form-control" required data-validation-required-message="This field is required"> <span class="input-group-addon">.00</span> </div>
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
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
@endsection
