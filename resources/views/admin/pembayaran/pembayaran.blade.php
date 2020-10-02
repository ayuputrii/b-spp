@extends('layouts.index')
@section('title','Table-Pembayaran')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<h3>
				Data Pembayaran SPP
		  	</h3>
		  	<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="/admin/pembayaran/form"><i class="fa fa-dashboard"></i> Form Pembayaran</a></li>
				<li class="breadcrumb-item"><a href="/admin/pembayaran/pembayaran"><i class="fa fa-dashboard"></i> Data Pembayaran</a></li>
            <li class="nav-item w-100"><br/>
            <div id="cari" class="dataTables_filter">
                <form action="/admin/pembayaran/pembayaran/cari" method="GET">
                    <label>Search:
                        <input type="search" class="form-control form-control-sm" name="nama" placeholder="Search" aria-controls="example">
                    </label>
                </form>
            </div>
            </li>
            </ol>
		</div>

		  <div class="row">
			<div class="col-12">
				 <div class="box">
					<!-- /.box-header -->
					<div class="box-body">
						<div class="table-responsive">
                        <div class="box-body wizard-content">
							<table class="table no-margin table-hover">
                                <thead>
                                    <tr class="bg-dark">
                                        <th class="text-warning">No</th>
                                        <th class="text-warning">Nama Petugas</th>
                                        <th class="text-warning">Nama Siswa</th>
                                        <th class="text-warning">Waktu Bayar</th>
                                        <th class="text-warning">Nominal</th>
                                        <th class="text-warning">Jumlah Bayar</th>
                                        <th class="text-warning">Action</th>
                                    </tr>
                                </thead>
                                @foreach ($pembayaran as $pembayaran)
                                <tbody>
                                    <tr class="bg-dark">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $pembayaran -> ModelPetugas['nama_petugas'] }}</td>
                                        <td>{{ $pembayaran -> ModelSiswa['nama'] }}</td>
                                        <td>{{ $pembayaran -> waktu_bayar }}</td>
                                        <td>{{ $pembayaran -> ModelSPP['nominal'] }}</td>
                                        <td>Rp.{{$pembayaran -> jumlah_bayar }}</td>
                                        <td>
                                            <a href="edit/editpembayaran/{{ $pembayaran->id_pembayaran }}">
                                                <button href="" class="btn btn-light btn-sm"><i class="mdi mdi-border-color" aria-hidden="true"></i></button>
                                            </a>
                                            <a href="/admin/pembayaran/pembayaran/hapus/{{ $pembayaran->id_pembayaran }}">
                                                <button class="btn btn-danger btn-sm"><i class="mdi mdi-delete-sweep" aria-hidden="true"></i></button>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                                @endforeach
							</table>
						</div>
					</div>
				  </div>
			  </div>
			</div>
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->

	  </div>
  </div>
@endsection
