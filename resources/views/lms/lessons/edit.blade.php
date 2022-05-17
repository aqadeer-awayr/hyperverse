@extends('lms.layouts.master')

@section('content')
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('courses.index') }}">Courses</a>
            </li>
            <li class="breadcrumb-item"><a href="{{ route('courses.show', $lesson->courseML->course->id) }}">ML</a>
            </li>
            <li class="breadcrumb-item"><a href="{{ route('course_ml.show', $lesson->courseML->id) }}">Edit</a>
            </li>
            <li class="breadcrumb-item active">Lesson</li>
        </ol>
    </nav>
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                {{ Form::open(['url' => route('lessons.update', $lesson->id),'enctype' => 'multipart/form-data','file' => true,'method' => 'PUT']) }}
                <div class="card-body">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" id="title" value="{{ old('title', $lesson->title) }}" name="title"
                            class="form-control">
                        @if ($errors->has('title'))
                            <span class="help-block">
                                <strong class="text-danger">{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="content">{{ old('content', $lesson->content) }}</textarea>
                        @if ($errors->has('content'))
                            <span class="help-block">
                                <strong class="text-danger">{{ $errors->first('content') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="name">Choose Lesson</label>
                        <input type="file" id="title" value="{{ old('lesson') }}" name="lesson" class="form-control"
                            accept=".webm,.MP4,.mpeg">

                        @if ($errors->has('lesson'))
                            <span class="help-block">
                                <strong class="text-danger">{{ $errors->first('lesson') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="col-12">
                    <a href="{{ route('lessons.create', $lesson->course_ml_id) }}" class="btn btn-secondary">Back</a>
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
