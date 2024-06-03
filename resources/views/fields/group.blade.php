<div class="row form-group {{ $align }}">
    @foreach($group as $field)

            <div class="{{ $field->colWidth ?? $class }} {{ $loop->first && $itemToEnd ? 'ms-auto': '' }} {{ !$loop->last ? 'pe-md-0': '' }}">
                {!! $field !!}
            </div>

    @endforeach
</div>
