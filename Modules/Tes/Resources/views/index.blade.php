@extends('tes::layouts.master')

@section('content')
	
<div class="col-md-12">
	
	<div class="card mt-4">
		
		<div class="card-header">
			<div class="row">
				<div class="col-md-10">
					<a href="/tes/tambah" class="btn btn-sm btn-success">+ Tambah Pegawai Baru</a>
				</div>
				<div class="col-md-2">Crud Pegawai Laravel</div>
			</div>
		</div>

		<div class="card-body">
			
			<div class="row">
				
				<div class="col-md-12 mb-2">

					@if ($status != null)
					<a href="/tes" class="btn btn-sm btn-primary"><= Kembali</a>
					@endif
			
				</div>

				<div class="col-md-12">
					
					<form action="/tes/cari" method="get" class="form-group">
						<div class="form-row">
							<input type="text" name="cari" class="form-control col-md-3" placeholder="Cari Pegawai ..." value="{{ $cari }}">
							<div class="col-md-1">
								<button type="submit" class="btn btn-md btn-info">Cari</button>
							</div>
						</div>
					</form>

				</div>

				<div class="col-md-12">
					
					<table class="table table-bordered table-hover">
						<tr>
							<!-- <th>No</th> -->
							<th>Nama</th>
							<th>Jabatan</th>
							<th>Umur</th>
							<th>Alamat</th>
							<th>Opsi</th>
						</tr>
						<?php $no=1; ?>
						@foreach($pegawai as $p)
						<tr>
							<!-- <td>{{ $no++ }}</td> -->
							<td>{{ $p->nama_pegawai }}</td>
							<td>{{ $p->jabatan }}</td>
							<td>{{ $p->umur }}</td>
							<td>{{ $p->alamat }}</td>
							<td>
								<a href="/tes/edit/{{ $p->id_pegawai }}" class="btn btn-sm btn-warning">Edit</a>
								<a href="/tes/hapus/{{ $p->id_pegawai }}" class="btn btn-sm btn-danger">Hapus</a>
							</td>
						</tr>
						@endforeach
					</table>
					Halaman : {{ $pegawai->currentPage() }} <br/>
					Jumlah data : {{ $pegawai->total() }} <br/>
					Data Per Halaman : {{ $pegawai->perPage() }} <br/>

				</div>

			</div>
			
		</div>

		<div class="card-footer">
			{{ $pegawai->links("pagination::bootstrap-4") }}
		</div>

	</div>

</div>

@stop
