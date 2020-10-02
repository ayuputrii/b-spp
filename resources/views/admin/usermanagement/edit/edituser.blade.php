@extends('layouts.index')
@section('title','Edit - User Management')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<h3>
				Form Edit Petugas
		  	</h3>
		  	<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/usermanagement/user"><i class="fa fa-dashboard"></i> Data Petugas</a></li>
		  	</ol>
        </div>
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    @foreach ($petugas as $petugas)
                    <form method="POST" action="/admin/usermanagement/user/update/{{$petugas->id_petugas}}">
                    {{ csrf_field() }}
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama Petugas</label>
                            <div class="col-sm-9">
                              <input class="form-control" name="nama_petugas" value="{{$petugas->nama_petugas}}" type="text">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label"> Email </label>
                            <div class="col-sm-9">
                              <input class="form-control" name="email" value="{{$petugas->email}}" type="text">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label"> Username </label>
                            <div class="col-sm-9">
                              <input class="form-control" name="username" value="{{$petugas->username}}" type="text">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label"> Password </label>
                            <div class="col-sm-9">
                              <input class="form-control" name="password" type="password" placeholder="Password">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Level</label>
                            <div class="col-sm-9">
                                <select name="id_petugas" class="form-control" placeholder="Nominal SPP" required>
                                        <option selected="selected">Level</option>
                                        <option> Petugas </option>
                                        <option> Admin </option>
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
