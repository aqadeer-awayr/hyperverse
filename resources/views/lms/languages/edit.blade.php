@extends('lms.layouts.master')

@section('content')
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('languages.index') }}">Languages</a>
            </li>
        </ol>
    </nav>
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                {{ Form::open(['url' => route('languages.update', $language->id)]) }}
                {{ Form::hidden('id', $language->id) }}
                @method('PUT')
                <div class="card-header">
                    <h3 class="card-title">Language</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Language Title</label>
                        <input type="text" id="name" value="{{ old('name', $language->name) }}" name="name"
                            class="form-control">
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong class="text-danger">{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="name">Language</label>
                        <input type="text" id="lang" class="form-control" name="lang"
                            value="{{ old('lang', $language->lang) }}">
                        @if ($errors->has('lang'))
                            <span class="help-block">
                                <strong class="text-danger">{{ $errors->first('lang') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="col-12">
                    <a href="{{ route('languages.index') }}" class="btn btn-secondary">Back</a>
                    <input type="submit" value="Update" class="btn btn-success float-right">
                </div>
            </div>
            <!-- /.card -->

            {{ Form::close() }}
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://unpkg.com/react@16.8.6/umd/react.production.min.js"></script>
    <script src="https://unpkg.com/react-dom@16.8.6/umd/react-dom.production.min.js"></script>
    <script src="https://unpkg.com/moment@2.24.0/min/moment.min.js"></script>
    <script src="{{ asset('vendor/laraberg/js/laraberg.js') }}"></script>
    <script>
        Laraberg.init('laraberg')
    </script>
@endsection
