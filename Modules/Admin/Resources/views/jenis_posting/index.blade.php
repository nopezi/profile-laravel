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

      				<div class="card card-plain">

      					<div class="card-header card-header-info">
		                  <h4 class="card-title mt-0">Jenis Posting</h4>
		                  	<button class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#tambahModal">
		                  		<i class="material-icons">add</i>
		                  	</button>
		                </div>

      					<div class="card-body">
		                  <div class="table-responsive">
		                    <table class="table table-hover">
		                      <thead class="">
		                        <th>No</th>
		                        <th>Jenis</th>
		                        <th>Icon</th>
		                        <th>Setting</th>
		                      </thead>
		                      <tbody>
		                        @foreach($data as $no => $d)
		                        <tr>
		                        	<td>{{++$no}}</td>
		                        	<td>{{$d->jenis}}</td>
		                        	<td>{{$d->icon}}</td>
		                        	<td>
		                        		<button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#editModal{{$d->id}}">
		                        			<i class="material-icons">edit</i>
		                        		</button>
		                        		<a href="/admin/jenis_posting/hapus/{{$d->id}}" class="btn btn-sm btn-danger">
		                        			<i class="material-icons">delete</i>
		                        		</a>
		                        	</td>
		                        </tr>
		                        </tr>
		                        @endforeach
		                      </tbody>
		                    </table>
		                  </div>
		                </div>
      					
      				</div>
      				
      			</div>

      		</div>

      	</div>

      </div>

      <!-- Modal tambah data -->
  	  @include('admin::jenis_posting.tambah')

  	  <!-- Modal edit data -->
  	  @include('admin::jenis_posting.edit')

	  @include('admin::layouts.footer')

    </div>
</div>

@include('admin::layouts.js')

@stop