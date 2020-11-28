<div class="modal fade" id="contohModal" tabindex="-1" role="dialog" aria-labelledby="contohModal" aria-hidden="true">
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