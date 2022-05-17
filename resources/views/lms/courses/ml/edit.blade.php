@extends('lms.layouts.master')

@section('content')
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('courses.index') }}">Courses</a>
            </li>
            <li class="breadcrumb-item active">Edit</li>
        </ol>
    </nav>

    <section>
        <div class="card-body">

            {{ Form::open(['url' => route('course_ml.update', $course->id),'enctype' => 'multipart/form-data','file' => true,'method' => 'PUT']) }}
            {{-- @foreach ($course->course as $key => $course) --}}
            <strong class="d-inline-block mb-2">Course in {{ $course->language->name }}</strong>
            <div class="form-group">
                <label for="name">Name</label>
                <input required type="text" id="name" name="name" value="{{ old('title', $course->name) }}"
                    class=" form-control">
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong class="text-danger">{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea required name="description" class="form-control" value="" rows="4"
                    maxlength="1500">{{ old('description', $course->description) }}</textarea>
                @if ($errors->has('description'))
                    <span class="help-block">
                        <strong class="text-danger">{{ $errors->first('description') }}</strong>
                    </span>
                @endif
            </div>
            <div class="row">
                <div class="col">
                    <strong class="d-inline-block mb-2">Upload Course Image</strong>
                    <input type="file" class="dropify" name="image" data-allowed-file-extensions="jpg png">
                </div>
                <div class="col">
                    <strong class="d-inline-block mb-2">Upload Course Logo</strong>
                    <input type="file" class="dropify" name="logo" data-allowed-file-extensions="png jpg">
                </div>
            </div>

            <div class="mt-3 col-12">
                <a href="{{ route('courses.index') }}" class="btn btn-secondary">Cancel</a>
                <input style="float: right" type="submit" value="Create" class="btn btn-success float-right">
            </div>
            <!-- /.card -->
            {{ Form::close() }}
        </div>
        <!-- /.card-body -->
    </section>

    <!-- /.content -->
@endsection
