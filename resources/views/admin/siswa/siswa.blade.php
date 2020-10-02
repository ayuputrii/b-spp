@extends('layouts.index')
@section('title','Form-Siswa')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<h3>
				Data Siswa
		  	</h3>
		  	<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/siswa/form"><i class="fa fa-dashboard"></i> Form Siswa</a></li>
				<li class="breadcrumb-item"><a href="/admin/siswa/siswa"><i class="fa fa-dashboard"></i> Data Siswa</a></li>
		  	</ol>
        </div>
		<div class="box-body">
			<div class="table-responsive">
                <div id="example1" class="dataTables_wrapper container-fluid dt-bootstrap4">
                    <div class="dt-buttons btn-group">
                        <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="example"><span>Copy</span></button> <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="example">
                            <span>CSV</span></button> <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="example"><span>Excel</span></button> <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="example">
                            <span>PDF</span></button> <button class="btn btn-secondary buttons-print" tabindex="0" aria-controls="example"><span>Print</span>
                        </button>
                    </div>
                    <div id="cari" class="dataTables_filter">
                        <form action="/admin/siswa/siswa/cari" method="GET">
                        <label>Search:
                            <input type="search" class="form-control form-control-sm" name="nama" placeholder="Search" aria-controls="example">
                        </label>
                        </form>
                    </div>
                    <table id="example1" class="table table-bordered table-hover display nowrap margin-top-10 w-p100 dataTable" role="grid" aria-describedby="example-info">
						<thead>
							<tr>
								<th>No</th>
								<th>Nisn</th>
								<th>Nis</th>
								<th>Nama Siswa</th>
								<th>Kelas</th>
								<th>Nomor Telephone</th>
								<th>Nominal</th>
                                <th>Action</th>
							</tr>
                        </thead>
                        @foreach ($siswa as $sw)
						<tbody>
							<tr>
                                <td>{{ $loop->iteration}}</td>
                                <td>{{ $sw -> nisn }} </td>
								<td>{{ $sw -> nis }} </td>
								<td>{{ $sw -> nama }} </td>
								<td>{{ $sw -> ModelKelas['nama_kelas'] }}</td>
                                <td>{{ $sw -> no_tlp }}
                                <td>Rp. {{ $sw -> ModelSPP['nominal'] }}
                                <td>
                                    <a href="edit/editsiswa/{{ $sw->id_siswa }}">
                                        <button href="" class="btn btn-light btn-sm"><i class="mdi mdi-border-color" aria-hidden="true"></i></button>
                                    </a>
                                    <a href="/admin/siswa/siswa/hapus/{{ $sw->id_siswa }}">
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
    @endsection
