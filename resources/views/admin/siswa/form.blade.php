@extends('layouts.index')
@section('title','Form-Siswa')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<h3>
				Form Siswa
		  	</h3>
		  	<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/siswa/form"><i class="fa fa-dashboard"></i> Form Siswa</a></li>
				<li class="breadcrumb-item"><a href="/admin/siswa/siswa"><i class="fa fa-dashboard"></i> Data Siswa</a></li>
		  	</ol>
        </div>
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Information</h4>
                    <form action="/admin/siswa/siswa/store" method="POST">
                        {{ csrf_field() }}
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nisn</label>
                            <div class="col-sm-9">
                              <input class="form-control" name="nisn" type="text" placeholder="Nomor Induk Standar Nasional">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label"> Nis </label>
                            <div class="col-sm-9">
                              <input class="form-control" name="nis" type="text" placeholder="Nomor Induk Siswa">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label"> Nama Siswa </label>
                            <div class="col-sm-9">
                              <input class="form-control" name="nama" type="text" placeholder="Nama Siswa">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Kelas</label>
                            <div class="col-sm-9">
                                <select name="id_kelas" class="form-control" placeholder="Kelas" required>
                                    @foreach ($kelas as $kelas)
                                        <option value = "{{ $kelas->id_kelas}}">{{$kelas->nama_kelas}}</option>
                                    @endforeach
                                </select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Alamat</label>
                            <div class="col-sm-9">
                              <textarea name="alamat" class="form-control" id="textarea" required="" placeholder="Alamat"></textarea>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nomor HP</label>
                            <div class="col-sm-9">
                              <input class="form-control" name="no_tlp" type="text" placeholder="Nomor Handphone">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nominal</label>
                            <div class="col-sm-9">
                                <select name="id_spp" class="form-control" placeholder="Nominal SPP" required>
                                    @foreach ($spp as $spp)
                                        <option value = "{{$spp->id_spp}}">{{$spp->nominal}}</option>
                                    @endforeach
                                </select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="text-xs-right">
                        <button type="submit" class="btn btn-rounded btn-info">Submit</button>
                      </div>
                    </form>
                  </div>
                </div>
            </div>
	    </div>
  </div>
@endsection
