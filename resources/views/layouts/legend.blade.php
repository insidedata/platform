<fieldset class="mb-3" data-async>

    @empty(!$title)
        <div class="col p-0 px-3">
            <legend class="text-black text-black mt-2 mx-2">
                {{ $title }}
            </legend>
        </div>
    @endempty

    <div class="bg-white rounded shadow-sm p-4 py-4 d-flex flex-column">
        <dl class="d-block m-0">
            @foreach($columns as $column)
                <div class="row py-2 {{ $loop->first ? '' : 'border-top' }}">
                    <div class="col text-muted fw-normal me-3" style="max-width:200px;">
                        {!! $column->buildDt($repository) !!}
                    </div>
                    <div class="col">
                        {!! $column->buildDd($repository) !!}
                    </div>
                </div>
            @endforeach
        </dl>
    </div>
</fieldset>
