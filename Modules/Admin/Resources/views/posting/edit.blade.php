@if (!empty($posting))
    @foreach($posting as $no => $p)

    <div class="modal fade" id="editModal{{ $p->id }}" tabindex="-1" role="dialog" aria-labelledby="editModal"
		  aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/admin/posting/edit/{{$id_menu}}" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Judul</label>
                                        <input type="hidden" name="id" value="{{ $p->id }}">
                                        <input type="text" name="judul" class="form-control" value="{{ $p->judul }}" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Isi</label>
                                        <textarea class="form-control" name="isi" rows="3">{{ $p->isi }}</textarea>
                                    </div>
                                </div>
                            </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-sm btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @endforeach
@endif