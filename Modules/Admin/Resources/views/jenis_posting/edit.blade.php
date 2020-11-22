@if (!empty($data))

	@foreach($data as $d)

	<div class="modal fade" id="editModal{{ $d->id }}" tabindex="-1" role="dialog" aria-labelledby="editModal"
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

	        <form action="/admin/jenis_posting/update/{{$d->id}}" method="POST" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label class="bmd-label-floating">Jenis Posting</label>
							<input type="text" name="jenis" value="{{$d->jenis}}" class="form-control" required="required">
						</div>
						<div class="form-group">
							<label class="bmd-label-floating">Nama Icon</label>
							<input type="text" name="icon" value="{{$d->icon}}" class="form-control" required="required">
						</div>
					</div>
				</div>

	      </div>
	      <div class="modal-footer">

	        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-sm btn-success">Edit</button>

		    </form>

	      </div>
	    </div>
	  </div>
	</div>

	@endforeach

@endif