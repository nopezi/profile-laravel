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

      						<?php// print_r($profile); ?>
      						
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
      		<div class="modal fade" id="contohModal" tabindex="-1" role="dialog" aria-labelledby="contohModal"
			  aria-hidden="true">
			  <div class="modal-dialog modal-sm" role="document">
			    <div class="modal-content">

			      <div class="modal-header">
			        <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>

			      <div class="modal-body">

			        <form action="/admin/profile/ganti_foto" method="POST" enctype="multipart/form-data">
						{{ csrf_field() }}
						<div class="row">
							<div class="col-md-12">
								<input type="file" name="foto">
								<div class="form-group">
									<input type="hidden" name="id" value="{{ $profile->id }}" class="form-control" required="required">
									<input type="hidden" name="foto_lama" value="{{ $profile->foto }}" class="form-control" required="required">
								</div>
							</div>
						</div>

			      </div>
			      <div class="modal-footer">

			        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-sm btn-success">Ganti</button>

				    </form>

			      </div>
			    </div>
			  </div>
			</div>
      		
      	</div>

      </div>
      
      @include('admin::layouts.footer')

    </div>
</div>

@include('admin::layouts.js')

@stop