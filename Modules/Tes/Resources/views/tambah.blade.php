@extends('tes::layouts.master')

@section('content')

<div class="col-md-12">

	<div class="card mt-4">
		<div class="card-header">
			<div class="row">
				<div class="col-md-10">
					<a href="/tes" class="btn btn-info btn-sm">< Kembali</a>
				</div>
				<div class="col-md-2">Tambah Data Pegawai</div>
			</div>
		</div>
		<div class="card-body">
			<form action="/tes/store" method="post">
				{{ csrf_field() }}
				<div class="form-group">
					<label>Nama</label>
					<input type="text" name="nama" class="form-control" required="required">
				</div>
				<div class="form-group">
					<label>Jabatan</label>
					<input type="text" name="jabatan" class="form-control" required="required">
				</div>
				<div class="form-group">
					<label>Umur</label>
					<input type="number" name="umur" class="form-control" required="required">
				</div>
				<div class="form-group">
					<label>Alamat</label>
					<textarea name="alamat" class="form-control" rows="3" required="required"></textarea>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-sm btn-info">Simpan Data</button>
				</div>
			</form>
		</div>
		<div class="card-footer">
			
		</div>
	</div>
	
</div>

@stop