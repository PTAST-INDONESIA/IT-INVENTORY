

<a href="{{ 'javascript:void(0)' }}"
   id="{{ $id }}"
   data-action="back"
   {{ $attributes->merge([
        'class' => 'btn btn-outline-success btn-sm mb-1 ' . (!$show ? 'disabled' : '')
   ]) }}
   @if(!$show) aria-disabled="true" tabindex="-1" @endif
>
    <i class="fa fa-arrow-left"></i> <b>Back</b>
</a>