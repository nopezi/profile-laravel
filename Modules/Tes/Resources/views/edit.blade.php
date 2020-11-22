@extends('tes::layouts.master')

@section('content')

	<div class="row">

		<div class="col-md-12 mt-4">
			
			<div class="card">
				<div class="card-header bg-info text-white">
					<div class="row">
						<div class="col-md-10">
							<a href="/tes" class="btn btn-sm btn-success">Kembali</a>
						</div>
						<div class="col-md-2">Edit Pegawai</div>
					</div>
				</div>
				<div class="card-body">
					@foreach($pegawai as $p)
					<form action="/tes/update" method="post">
						{{ csrf_field() }}
						<input type="hidden" name="id" value="{{ $p->id_pegawai }}"><br>
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" id="nama" name="nama" class="form-control" required="required" value="{{ $p->nama_pegawai }}">
						</div>
						<div class="form-group">
							<label for="jabatan">Jabatan</label>
							<input type="text" id="jabatan" name="jabatan" class="form-control" required="required" value="{{ $p->jabatan }}">
						</div>
						<div class="form-group">
							<label for="umur">Umur</label>
							<input type="number" id="umur" name="umur" class="form-control" required="required" value="{{ $p->umur }}">
						</div>
						<div class="form-group">
							<label for="alamat">Alamat</label>
							<textarea required="required" id="alamat" class="form-control" rows="3" name="alamat">{{ $p->alamat }}</textarea>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-sm btn-primary">Simpan Data</button>
						</div>
					</form>
					@endforeach
				</div>			
			</div>

		</div>

	</div>

@stop