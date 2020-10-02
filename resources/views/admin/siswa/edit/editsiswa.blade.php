@extends('layouts.index')
@section('title','Form-Edit')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<h3>
				Form Edit Siswa
		  	</h3>
		  	<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/siswa/siswa"><i class="fa fa-dashboard"></i> Data Siswa</a></li>
		  	</ol>
        </div>
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Information</h4>
                    @foreach ($siswa as $siswa)
                        <form method="POST" action="/admin/siswa/siswa/update/{{$siswa->id_siswa}}">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nisn</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nisn" class="form-control" value="{{$siswa->nisn}}" required data-validation-required-message="This field is required">
                                    </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"> Nis </label>
                                <div class="col-sm-9">
                                    <input type="text" name="nis" class="form-control" value="{{$siswa->nis}}" required data-validation-required-message="This field is required">
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Siswa</label>
                                <div class="col-sm-9">
                                    <input type="text" name="nama" class="form-control" value="{{$siswa->nama}}" required data-validation-required-message="This field is required">
                                </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"> Kelas </label>
                                <div class="col-sm-9">
                                    <select name="id_kelas" class="form-control" value="{{$siswa->id_kelas}}" placeholder="Kompetensi Keahlian" required>
                                        @foreach ($kelas as $kelas)
                                            <option value = "{{ $kelas->id_kelas}}">{{$kelas->nama_kelas}}-{{$kelas->kompetensi_keahlian}}</option>
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
                                    <textarea name="alamat" class="form-control" placeholder="Alamat" value="">{{ $siswa->alamat }}</textarea>
                                    <div class="help-block"></div>
                                </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nomor HP</label>
                                <div class="col-sm-9">
                                    <input type="text" name="no_tlp" class="form-control" value="{{$siswa->no_tlp}}" required data-validation-required-message="This field is required">
                                </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nominal</label>
                                <div class="col-sm-9">
                                    <select name="id_spp" class="form-control" value="{{$siswa->id_spp}}" required>
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
                    @endforeach
                  </div>
                </div>
            </div>
	    </div>
  </div>
@endsection
