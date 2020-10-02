@extends('layouts.index')
@section('title','Table-Tahun Ajaran')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<h3>
				Data Tahun Ajaran
		  	</h3>
		  	<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/tahunajaran/form"><i class="fa fa-dashboard"></i> Form Tahun</a></li>
				<li class="breadcrumb-item"><a href="/admin/tahunajaran/tahunajaran"><i class="fa fa-dashboard"></i> Data Tahun</a></li>
		  	</ol>
		</div>
        <div class="row">
			<div class="col-12">
				 <div class="box">
					<!-- /.box-header -->
					<div class="box-body">
						<div class="table-responsive">
						    <div id="example1" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                </div>
                            </div>
                            <table id="example1" class="table table-bordered table-hover display nowrap margin-top-10 w-p100 dataTable" role="grid" aria-describedby="example-info">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tahun Ajaran</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                @foreach ($tahun_ajaran as $tahun_ajaran)
                                <tbody>
                                    <tr>
                                        <td>{{ $loop->iteration}}</td>
                                        <td>{{ $tahun_ajaran -> tahun_ajaran }} </td>
                                        <td>
                                            <a href="edit/edittahun/{{$tahun_ajaran->id_tahun}}">
                                            <button href="" class="btn btn-light btn-sm"><i class="mdi mdi-border-color" aria-hidden="true"></i></button>
                                            </a>
                                            <a href="/admin/tahunajaran/tahunajaran/hapus/{{ $tahun_ajaran->id_tahun }}">
                                            <button class="btn btn-danger btn-sm"><i class="mdi mdi-delete-sweep"></i></button>
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
