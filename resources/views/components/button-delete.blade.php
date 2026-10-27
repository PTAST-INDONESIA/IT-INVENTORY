<button type="{{ $type }}" data-toggle="modal" data-target=".bd-example-modal-sm"
        id="{{ $id }}"
        {{ $attributes->merge([
            'class' => 'btn btn-outline-success btn-sm mb-1'
        ]) }}
        @if(!$show) disabled @endif
        
>
    <i class="fa fa-trash"></i> <b>Delete</b>
</button>
    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true" id="modal-delete">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Message</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <b id="modalText"></b>
                    <input type="hidden" id="modalID">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light btn-md" data-dismiss="modal">No</button>
                    <button type="button" class="btn btn-success btn-md" onclick="delete_data()">yes</button>
                </div>
            </div>
        </div>
    </div> 

                                  