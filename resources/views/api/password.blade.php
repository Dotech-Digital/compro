<form method="post" action="{{ $url }}" role="form" class="form-horizontal" id="main-form" autocomplete="off"
    data-reload="true">
    @csrf
    @method('PUT')
    <div id="modal-master" class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{!! $title !!}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group required row mb-2">
                    <label class="col-sm-3 control-label col-form-label">Password</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm" id="password" name="password" />
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-warning">Cancel</button>
                <button type="submit" id="btn-save" class="btn btn-primary">Confirm</button>
            </div>
        </div>
    </div>
</form>
