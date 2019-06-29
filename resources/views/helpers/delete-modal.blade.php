<div class="modal fade" tabindex="-1" role="dialog" id="delete-modal-{{ $id }}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Deletar {{ $quem }}?</h4>
            </div>
            <div class="modal-body">
                <p>{{ $slot }}</p>
            </div>
            <div class="modal-footer">
                <form action="{{ $url }}" method="POST">
                    @method("DELETE")
                    @csrf
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
            </div>
        </div>
    </div>
</div>