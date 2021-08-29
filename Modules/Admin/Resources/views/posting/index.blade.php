@extends('admin::layouts.master')

@section('content')

<div class="wrapper ">

    @include('admin::layouts.sidebar')

    <div class="main-panel">
      
      @include('admin::layouts.navbar')

      <div class="content">

      	<div class="container-fluid">
      		
      		<div class="row">

      			<div class="col-lg-12">
      				<button class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#tambahModal">
                  		<i class="material-icons">add</i>
                  	</button>
      			</div>
      			
      			<div class="col-lg-12 col-md-12">
      				
      				<div class="card">

      					<!-- <div class="card-header card-header-primary">
		                  <h4 class="card-title mt-0"> Table on Plain Background</h4>
		                  <p class="card-category"> Here is a subtitle for this table</p>
		                </div> -->
      					<!-- <div class="card-body">	 -->
      					  
		                  <div class="table-responsive">
		                    <table class="table table-hover">
		                      <thead class="card-header card-header-info">
		                        <th>No</th>
		                        <th>Gambar</th>
		                        <th>Judul</th>
		                        <th>Isi</th>
		                        <th class="text-center">Setting</th>
		                      </thead>
		                
		                      <tbody class="card-body">
		                      @if (!empty($posting))
		                      	@foreach($posting as $no => $p)
		                      	<tr>
		                      		<td>{{ ++$no }}</td>
		                      		<td>
		                      			<img src="https://mdbootstrap.com/img/Others/documentation/1.jpg" class="img-fluid" style="width: 50px; height: 50px" alt="Responsive image">
		                      		</td>
		                      		<td>{{ $p->judul }}</td>
		                      		<td>{{ $p->isi }}</td>
		                      		<td class="text-center">
									    <button class="btn btn-sm btn-round btn-warning" data-toggle="modal" data-target="#editModal{{ $p->id }}">
											<i class="material-icons">edit</i>
										</button>
										<button class="btn btn-sm btn-round btn-danger" data-toggle="modal" data-target="#hapusModal{{ $p->id }}">
											<i class="material-icons">delete</i>
										</button>
		                      		</td>
		                      	</tr>
		                      	@endforeach
		                      @endif
		                      </tbody>
		                    </table>
		                  </div>
		                <!-- </div> -->
      					
      				</div>
      				
      			</div>

      		</div>

      	</div>

      </div>

      <!-- modal tambah data -->
      @include('admin::posting.tambah')
	  @include('admin::posting.edit')
	  @include('admin::posting.hapus')

	  @include('admin::layouts.footer')

    </div>
</div>

@include('admin::layouts.js')

@stop