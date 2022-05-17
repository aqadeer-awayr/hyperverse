@extends('lms.layouts.master')
@section('content')
    <section class="section">
        <div class="card-body">
            {{ Form::open(['url' => route('home-page.store')]) }}
            <div class="form-group">
                <strong class="d-inline-block mb-2">Choose languages</strong>
                <select name="language_id" class="js-example-basic-single w-100">
                    @foreach (languages() as $key => $language)
                        @if ($language->id == 1)
                            @continue;
                        @endif
                        <option value={{ $language->id }}>{{ $language->name . ' (' . $language->lang . ' )' }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <strong class="d-inline-block mb-2">Choose Section</strong>
                <select id="get_slug_attributes" class="js-example-basic-single w-100">
                    <option></option>
                    @foreach (trans('translation.home') as $key => $data)
                        <option value="{{ $key }}">{{ $key }}</option>
                    @endforeach
                </select>
            </div>
            <div class="clone"></div>

            <div class="mt-3 col-12">
                <a href="{{ route('home-page.index') }}" class="btn btn-secondary">Back</a>
                <input style="float: right" type="submit" value="Create" class="btn btn-success float-right">
            </div>
            {{ Form::close() }}
        </div>
    </section>
@endsection
<script type="text/javascript">
    const basePath = '{{ url('/') }}';
</script>
