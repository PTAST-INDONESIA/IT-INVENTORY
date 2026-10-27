<button type="{{ $type }}"
        id="{{ $id }}"
        {{ $attributes->merge([
            'class' => 'btn btn-outline-success btn-sm mb-1'
        ]) }}
        @if(!$show) disabled @endif
>
    <i class="fa fa-save"></i> <b>Save</b>
</button>