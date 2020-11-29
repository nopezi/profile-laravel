@extends('admin::layouts.master')

@section('content')

<div class="wrapper ">
    @include('admin::layouts.sidebar')
    <div class="main-panel">
      
      @include('admin::layouts.navbar')

      <div class="content">

      	<div class="container-fluid">

      		<div class="row">

      			<div class="col-lg-12 col-md-12">

      				<div class="card card-profile">
		                <div class="card-avatar">
		                  <a data-toggle="modal" data-target="#contohModal">
		                  	@if (!empty($profile->foto))
		                  	<img class="img" src="{{ asset('gambar') }}/{{ $profile->foto }}" />
		                  	@else
		                    <img class="img" src="{{ asset('material-dashboard-master/assets/img/faces/marc.jpg') }}" />
		                    @endif
		                  </a>
		                </div>

      					<!-- <div class="card-header card-header-info">
      						<h4 class="card-title">Edit Profile</h4>
			                <p class="card-category">Complete your profile</p>
      					</div> -->

      					<div class="card-body">
      						
      						<form action="/admin/profile/update" method="POST">
      							{{ csrf_field() }}
      							<div class="row">
      								<div class="col-md-12">
      									<div class="form-group">
      										<label class="bmd-label-floating">Nama Lengkap</label>
      										<input type="hidden" name="id" value="{{ $profile->id }}" class="form-control" required="required">
      										<input type="text" name="nama_lengkap" value="{{ $profile->nama_lengkap }}" class="form-control" required="required">
      									</div>
      								</div>
      							</div>

      							<div class="row">
			                      <div class="col-md-6">
			                        <div class="form-group">
			                          <label class="bmd-label-floating">Tempat Lahir</label>
			                          <input type="text" name="tempat_lahir" value="{{ $profile->tempat_lahir }}" class="form-control" required="required">
			                        </div>
			                      </div>
			                      <div class="col-md-6">
			                        <div class="form-group">
			                          <input type="date" name="tgl_lahir" value="{{ $profile->tanggal_lahir }}" class="form-control" required="required">
			                        </div>
			                      </div>
			                    </div>

			                    <div class="row">

			                      <div class="col-md-6">
				                    <div class="form-group">
			                          <label class="bmd-label-floating">Agama</label>
			                          <input type="text" name="agama" value="{{ $profile->agama }}" class="form-control" required="required">
			                        </div>
			                      </div>

			                      <div class="col-md-6">
			                        <div class="form-group">
			                          <label class="bmd-label-floating">Email</label>
			                          <input type="email" name="email" value="{{ $profile->email }}" class="form-control" required="required">
			                        </div>
			                      </div>

			                    </div>

			                    <div class="row">

			                      <div class="col-md-6">
				                    <div class="form-group">
			                          <label class="bmd-label-floating">Nomor HP</label>
			                          <input type="number" name="no_hp" value="{{ $profile->no_hp }}" class="form-control" required="required">
			                        </div>
			                      </div>

			                      <div class="col-md-6">
			                        <div class="form-group">
			                          <label class="bmd-label-floating">Hobi</label>
			                          <input type="text" name="hobi" value="{{ $profile->hobi }}" class="form-control" required="required">
			                        </div>
			                      </div>

			                    </div>

			                    <div class="row">
			                      <div class="col-md-12">
			                        <div class="form-group">
			                          <div class="form-group">
			                            <label class="bmd-label-floating">Alamat</label>
			                            <textarea class="form-control" name="alamat" rows="2" required="required">{{ $profile->alamat }}</textarea>
			                          </div>
			                        </div>
			                      </div>
			                    </div>

			                    <div class="row">
			                      <div class="col-md-12">
			                        <div class="form-group">
			                          <div class="form-group">
			                            <label class="bmd-label-floating">Tentang Saya</label>
			                            <textarea class="form-control" name="deskripsi" rows="5" required="required">{{ $profile->deskripsi }}</textarea>
			                          </div>
			                        </div>
			                      </div>
			                    </div>

			                    <button type="submit" class="btn btn-success pull-right">Update Profile</button>
			                    <div class="clearfix"></div>

      						</form>

      					</div>

      				</div>

      			</div>
      			
      		</div>

      		<!-- Modal ganti gambar -->
      		@if (!empty($profile->id))
	      		@include('admin::profile.modal')
      		@endif
      		
      	</div>

      </div>
      
      @include('admin::layouts.footer')

    </div>
</div>

@include('admin::layouts.js')

@stop