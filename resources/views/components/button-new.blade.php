<a href="{{ $show ? $url : 'javascript:void(0)' }}"
   id="{{ $id }}"
   data-action="new"
   {{ $attributes->merge([
        'class' => 'btn btn-outline-success btn-sm mb-1 ' . (!$show ? 'disabled' : '')
   ]) }}
   @if(!$show) aria-disabled="true" tabindex="-1" @endif
>
    <i class="fa fa-plus"></i><b> Add </b>
</a>
