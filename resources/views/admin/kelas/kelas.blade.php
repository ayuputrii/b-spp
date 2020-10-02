@extends('layouts.index')
@section('title','Table-Kelas')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<h3>
				Data Kelas
		  	</h3>
		  	<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/kelas/form"><i class="fa fa-dashboard"></i> Form Kelas</a></li>
				<li class="breadcrumb-item"><a href="/admin/kelas/kelas"><i class="fa fa-dashboard"></i> Data Kelas</a></li>
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
                                        <th>Nama Kelas</th>
                                        <th>Kompetensi Keahlian</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                @foreach ($kelas as $kelas)
                                <tbody>
                                    <tr>
                                        <td>{{ $loop->iteration}}</td>
                                        <td>{{ $kelas -> nama_kelas }} </td>
                                        <td>{{ $kelas -> kompetensi_keahlian }}</td>
                                        <td>
                                            <a href="edit/editkelas/{{ $kelas->id_kelas }}">
                                            <button href="" class="btn btn-light btn-sm"><i class="mdi mdi-border-color" aria-hidden="true"></i></button>
                                            </a>
                                            <a href="/admin/kelas/kelas/hapus/{{ $kelas->id_kelas }}">
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
