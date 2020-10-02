@extends('layouts.index')
@section('title','Tabel - User Management')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<h3>
				Data User Management
		  	</h3>
		  	<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/usermanagement/form"><i class="fa fa-dashboard"></i> Form User Management</a></li>
				<li class="breadcrumb-item"><a href="/admin/usermanagement/user"><i class="fa fa-dashboard"></i> Data User Management</a></li>
		  	</ol>
        </div>
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
						<div class="table-responsive">
                            <table id="example1" class="table table-bordered table-hover display nowrap margin-top-10 w-p100 dataTable" role="grid" aria-describedby="example-info">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Petugas</th>
                                        <th>Email</th>
                                        <th>Username</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                {{--  @dd($userActive)  --}}
                                @foreach ($petugas as $petugas)
                                <tbody>
                                    <tr>
                                        <td>{{ $loop->iteration}}</td>
                                        <td>{{ $petugas -> nama_petugas }}</td>
                                        <td>{{ $petugas -> email }}</td>
                                        <td>{{ $petugas -> username }}</td>
                                        <td>
                                            <a href="edit/edituser/{{$petugas->id_petugas}}">
                                            <button href="" class="btn btn-light btn-sm"><i class="mdi mdi-border-color" aria-hidden="true"></i></button>
                                            </a>
                                            <a href="/admin/usermanagement/user/hapus/{{ $petugas->id_petugas }}">
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
