<a href="{{ $show ? $url : 'javascript:void(0)' }}"
   data-id="{{ $dataId }}"
   data-action="view"
   class="btn btn-outline-success btn-action view-data {{ !$show ? 'disabled' : '' }}"
   @if(!$show) aria-disabled="true" tabindex="-1" @endif
>
    <i class="fa fa-eye"></i> View
</a>
