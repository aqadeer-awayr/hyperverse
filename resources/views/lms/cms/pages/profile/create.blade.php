@extends('lms.layouts.master')
@section('content')
    <section class="section">
        <div class="card-body">
            {{ Form::open(['url' => route('profiles.store')]) }}
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
            <input type="hidden" name="for_page" value="profiles">
            <input type="hidden" name="slug" value="profile">
            @foreach ($profiles as $profile)
                <div class="form-group">
                    <label for="name">{{ $profile }}</label>
                    <input required type="text" id="{{ $profile }}" name="data[{{ $profile }}]"
                        class="form-control">
                </div>
            @endforeach

            {{-- <div class="form-group">
                <label for="name">Profile</label>
                <input required type="text" id="profile" name="data[profile]" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Logout</label>
                <input required type="text" id="home" name="data[logout]" class="form-control">
            </div> --}}
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
