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

            {{ Form::open(['url' => route('courses.update', $course->id),'enctype' => 'multipart/form-data','file' => true,'method' => 'PUT']) }}
            {{-- @foreach ($course->course as $key => $course) --}}
            <div class="form-group mb-3">
                <strong class="d-inline-block mb-2">Choose languages</strong>
                <select style="width: 100%" class="js-example-basic-single" name="languages[]" multiple="multiple"
                    id="multi-languages" placeholder="Choose">
                    @foreach ($languages as $key => $language)
                        <option value={{ $language->id }}>{{ $language->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="cloning">
                <div id="language_{{ $course->id }}">
                    <div class="form-group">
                        <input type="text" id="title" name="title" value="{{ old('title', $course->title) }}"
                            class="form-control">
                        @if ($errors->has('title'))
                            <span class="help-block">
                                <strong class="text-danger">{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            {{-- @endforeach --}}
            <div class="mt-3 col-12">
                <a href="{{ route('courses.index') }}" class="btn btn-secondary">Cancel</a>
                <input style="float: right" type="submit" value="Update" class="btn btn-primary">
            </div>
            <!-- /.card -->
            {{ Form::close() }}
        </div>
        <!-- /.card-body -->
    </section>

    <!-- /.content -->
@endsection
