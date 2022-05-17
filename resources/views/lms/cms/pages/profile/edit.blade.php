@extends('lms.layouts.master')
@section('content')
    <section class="section">
        <div class="card-body">
            {{ Form::open(['url' => route('profiles.update', $profile->id), 'method' => 'PUT']) }}
            @foreach ($profile->jsonData as $key => $data)
                <div class="form-group">
                    <label for="name">{{ ucwords(str_replace('_', ' ', $key)) }}</label>
                    <input required type="text" id="{{ $key }}" name="data[{{ $key }}]"
                        value="{{ $data ?? '' }}" class="form-control">
                </div>
            @endforeach
            <div class="mt-3 col-12">
                <a href="{{ route('profiles.index') }}" class="btn btn-secondary">Cancel</a>
                <input style="float: right" type="submit" value="Update" class="btn btn-success float-right">
            </div>
            {{ Form::close() }}
        </div>
    </section>
@endsection
