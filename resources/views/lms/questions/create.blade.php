@extends('lms.layouts.master')

@section('content')
    <nav aria-label="breadcrumb" class="main-breadcrumbs">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('quizzes.create', $quiz->course_ml_id) }}">Quizzes</a>
            </li>
            <li class="breadcrumb-item"><a href="{{ route('quizzes.show', $quiz->id) }}">Question</a>
            </li>
            <li class="breadcrumb-item active">Create </li>
        </ol>
    </nav>
    <section>
        <div class="card-body">
            {{ Form::open(['url' => route('questions.store'), 'enctype' => 'multipart/form-data', 'file' => true]) }}
            {{ Form::hidden('quiz_id', $quiz->id) }}

            <div class="card-header">
                <h3 class="card-title">Add Question Number {{ count($quiz->questions) + 1 }}
                </h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Title in</label>
                    <input type="text" id="question" value="{{ old('question') }}" name="question" class="form-control">
                    @if ($errors->has('question'))
                        <span class="help-block">
                            <strong class="text-danger">{{ $errors->first('question') }}</strong>
                        </span>
                    @endif
                </div>
                <div id="options">
                </div>
            </div>

            <div class="mt-3 col-12">
                <a id="add_option" class="btn btn-secondary">Add Options</a>
                <input style="float: right" type="submit" value="Save" class="btn btn-success float-right">
            </div>
            {{ Form::close() }}
        </div>
    </section>

    <div class="col-lg-12 stretch-card">
        <div class="card">
            <div class="card-body">

                <div class="table-responsive pt-3" id="quizzes-table-data">
                    @include('lms.questions.table-data')
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
        $(document).on('click', '.del-lang-Quiz-ml', function() {

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
                            $('#quizzes-table-data').html(response)
                        }
                    })
                }
            })
        })
    </script>
@endsection
