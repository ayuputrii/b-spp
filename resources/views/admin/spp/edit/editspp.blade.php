@extends('layouts.index')
@section('title','Form-SPP')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<h3>
				Form Edit SPP
		  	</h3>
		  	<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/spp/spp"><i class="fa fa-dashboard"></i> Data SPP</a></li>
		  	</ol>
        </div>
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    @foreach ( $spp as $spp )
                        <form action="/admin/spp/spp/update/{{$spp->id_spp}}" method="POST">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <h5>Tahun Ajaran<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="id_tahun" class="form-control" placeholder="Tahun Ajaran" value="tahun_ajaran" required>
                                        @foreach ($tahun_ajaran as $tahun_ajaran)
                                            <option value = "{{ $tahun_ajaran->id_tahun}}">{{$tahun_ajaran->tahun_ajaran}}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Nominal <span class="text-danger">*</span></h5>
                                    <div class="input-group"> <span class="input-group-addon">$</span>
                                        <input type="number" name="nominal" class="form-control" value="{{$spp->nominal}}" required data-validation-required-message="This field is required"> <span class="input-group-addon">.00</span> </div>
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
@endsection
