@extends('layouts.index')
@section('title','Table-SPP')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<h3>
				Data SPP
		  	</h3>
		  	<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/spp/form"><i class="fa fa-dashboard"></i> Form SPP</a></li>
				<li class="breadcrumb-item"><a href="/admin/spp/spp"><i class="fa fa-dashboard"></i> Data SPP</a></li>
		  	</ol>
		</div>

		  <div class="row">
			<div class="col-12">
				 <div class="box">
					<!-- /.box-header -->
					<div class="box-body">
						<div class="table-responsive">
						    <div id="example1" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                <div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="example1_length">
                                  </div></div>
                                      <div class="col-sm-12 col-md-6"><div id="example1_filter" class="dataTables_filter">
                                      </div>
                                </div>
                            </div>
                            <table id="example1" class="table table-bordered table-hover display nowrap margin-top-10 w-p100 dataTable" role="grid" aria-describedby="example-info">
							<thead>
								<tr>
									<th>No</th>
									<th>Tahun</th>
									<th>Nominal</th>
									<th>Action</th>
								</tr>
                            </thead>
                            @foreach ($spp as $spp)
							<tbody>
								<tr>
                                    <td>{{ $loop->iteration}}</td>
									<td>{{ $spp -> ModelTahun['tahun_ajaran']}} </td>
									<td>Rp. {{ $spp -> nominal }}</td>
                                    <td>
                                        <a href="edit/editspp/{{ $spp->id_spp }}">
                                        <button href="" class="btn btn-light btn-sm"><i class="mdi mdi-border-color" aria-hidden="true"></i> </button>
                                        </a>
                                        <a href="/admin/spp/spp/hapus/{{ $spp->id_spp }}">
                                        <button class="btn btn-danger btn-sm"><i class="mdi mdi-delete-sweep " aria-hidden="true"></i> </button>
                                        </a>
                                    </td>
								</tr>
							</tbody>
                            @endforeach
						  </table>
						</div>
					</div>
					<!-- /.box-body -->
				  </div>
			</div>
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->

	  </div>
  </div>
@endsection
