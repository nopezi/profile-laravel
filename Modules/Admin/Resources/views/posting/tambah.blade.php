<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModal"
		  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">

        <form action="/admin/posting/tambah/{{$id_menu}}" method="POST" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label class="bmd-label-floating">Judul</label>
						<input type="text" name="judul" class="form-control" required="required">
					</div>
          <div class="form-group">
            <label class="bmd-label-floating">Isi</label>
            <textarea class="form-control" name="isi" rows="3"></textarea>
          </div>
				</div>
			</div>

      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-sm btn-success">Tambah</button>

	    </form>

      </div>
    </div>
  </div>
</div>