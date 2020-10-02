@extends('layouts.index')
@section('title','Form-Pembayaran SPP')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<h3>
				Form Pembayaran SPP
		  	</h3>
		  	<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="/admin/pembayaran/form"><i class="fa fa-dashboard"></i> Form Pembayaran</a></li>
				<li class="breadcrumb-item"><a href="/admin/pembayaran/pembayaran"><i class="fa fa-dashboard"></i> Data Pembayaran</a></li>
		  	</ol>
		</div>

        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
				<form action="/admin/pembayaran/pembayaran/store" method="POST">
                {{ csrf_field() }}
                    <section>
						<div class="row">
							<div class="col-md-6">
                                <div class="form-group">
                                    <h5> Nama Petugas <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="id_petugas" class="form-control" placeholder="Nama Petugas" required>
                                        @foreach ($petugas as $petugas)
                                            <option value = "{{ $petugas->id_petugas}}">{{$petugas->nama_petugas}}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
							</div>
							<div class="col-md-6">
                                <div class="form-group">
                                    <h5> Nisn  <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="id_siswa" class="form-control" placeholder="Nisn" required>
                                        @foreach ($siswa as $siswa)
                                            <option value = "{{ $siswa->id_siswa}}">{{$siswa->nisn}}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="lastName1">Waktu Bayar</label>
									<input type="date" class="form-control" name="waktu_bayar" required> </div>
                            </div>
							<div class="col-md-6">
                                <div class="form-group">
                                    <h5> Nominal  <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="id_spp" class="form-control" placeholder="Nominal" required>
                                        @foreach ($spp as $spp)
                                            <option value = "{{ $spp->id_spp}}">{{$spp->nominal}}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
                                    <h5>Jumlah Bayar</h5>
									<input type="number" name="jumlah_bayar" class="form-control" id=""> </div>
							</div>
						</div>
                            <div class="text-xs-right">
                                <button type="submit" class="btn btn-rounded btn-info">Submit</button>
                            </div>
						</div>
					</section>
				</form>
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>
		<!-- /.content -->
	  </div>
  </div>
@endsection
