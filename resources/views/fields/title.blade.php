@component($typeForm, get_defined_vars())
    
    @if(strlen($value) > 0)

        <{{$type ?? 'h1'}} {{ $attributes }}>
            {{ $value }}
        </{{$type ?? 'h1'}}>
    @endif
@endcomponent
