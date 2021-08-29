@if (!empty($posting))
    @foreach($posting as $no => $p)

    <div class="modal fade" id="hapusModal{{ $p->id }}" tabindex="-1" role="dialog" aria-labelledby="hapusModal"
		  aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/admin/posting/hapus/{{$id_menu}}" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                            {{ csrf_field() }}
                            <p class="text-center">Yakin menghapus data ini ?</p>
                            <input type="hidden" name="id" value="{{ $p->id }}">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @endforeach
@endif