@extends('lms.layouts.master')

@section('content')
    <nav aria-label="breadcrumb" class="main-breadcrumbs">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('courses.index') }}">Courses</a>
            </li>
            <li class="breadcrumb-item"><a
                    href="{{ route('course_ml.show', $quiz->course_ml_id) }}">{{ $quiz->course_ml_id }}</a>
            </li>
            <li class="breadcrumb-item"><a href="{{ route('quizzes.create', $quiz->course_ml_id) }}">quiz</a>
            </li>
        </ol>
    </nav>
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                {{ Form::open(['url' => route('quizzes.update', $quiz->id)]) }}
                {{ Form::hidden('id', $quiz->id) }}
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Title</label>
                        <input type="text" id="title" value="{{ old('title', $quiz->title) }}" name="title"
                            class="form-control">
                        @if ($errors->has('title'))
                            <span class="help-block">
                                <strong class="text-danger">{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="col-12">
                    <a href="{{ route('quizzes.create', $quiz->course_ml_id) }}" class="btn btn-secondary">Back</a>
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
