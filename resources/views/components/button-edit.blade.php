<a href="{{ $show ? $url : 'javascript:void(0)' }}"
   data-id="{{ $dataId }}"
   data-action="edit"
   class="btn btn-outline-success btn-action edit-data {{ !$show ? 'disabled' : '' }}"
   @if(!$show) aria-disabled="true" tabindex="-1" @endif
>
    <i class="fa fa-pencil"></i> Edit
</a>
