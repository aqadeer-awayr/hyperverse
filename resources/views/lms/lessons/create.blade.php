@extends('lms.layouts.master')

@section('content')
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('courses.index') }}">Courses</a>
            </li>
            <li class="breadcrumb-item"><a href="{{ route('courses.show', $course->course->id) }}">ML</a>
            </li>
            <li class="breadcrumb-item"><a href="{{ route('course_ml.show', $course->id) }}">Show</a>
            </li>
            <li class="breadcrumb-item active">Lesson</li>
        </ol>
    </nav>

    <section>
        <div class="card-body">
            {{ Form::open(['url' => route('lessons.store'), 'enctype' => 'multipart/form-data', 'file' => true]) }}
            {{ Form::hidden('course_ml_id', $course->id) }}

            <div class="card-header">
                <h3 class="card-title">Add Lesson Number {{ count($course->lessons) + 1 }} for Course
                    {{ $course->course->title }} for Language {{ $course->language->name }}
                </h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Title in {{ $course->language->name }}</label>
                    <input type="text" id="title" value="{{ old('title') }}" name="title" class="form-control">
                    @if ($errors->has('title'))
                        <span class="help-block">
                            <strong class="text-danger">{{ $errors->first('title') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="name">Content in {{ $course->language->name }}</label>
                    <textarea class="form-control" {{ old('content') }} name="content"></textarea>

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

            <div class="mt-3 col-12">
                <a href="{{ route('course_ml.show', $course->id) }}" class="btn btn-secondary">Cancel</a>
                <input style="float: right" type="submit" value="Save" class="btn btn-success float-right">
            </div>
            {{ Form::close() }}
    </section>
    </div>

    <div class="col-lg-12 stretch-card">
        <div class="card">
            <div class="card-body">

                <div class="table-responsive pt-3" id="lessons-table-data">
                    @include('lms.lessons.table-data')
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
@endsection

@section('scripts')

    <script type="text/javascript">
        $(document).ready(function() {
            // location.reload();
            $.noConflict()
            // $('#abc').DataTable();
        });
        $(document).on('click', '.del-lang-lesson-ml', function() {

            var url = $(this).attr('data-route');
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        type: 'DELETE',
                        url: url,
                        success: function(response) {
                            console.log(response)
                            $('#lessons-table-data').html(response)
                        }
                    })
                }
            })
        })
    </script>

@endsection
