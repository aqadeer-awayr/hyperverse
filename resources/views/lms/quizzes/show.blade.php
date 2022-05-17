@extends('lms.layouts.master')
@section('content')
    <nav aria-label="breadcrumb" class="main-breadcrumbs">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('quizzes.create', $quiz->course_ml_id) }}">Quizzes</a>
            </li>
            <li class="breadcrumb-item active">Show </li>
        </ol>
    </nav>
    <section>
        <div class="card-body">
            <div class="row align-items-center mb-2">
                <div class="col-6">
                    <h4 class="card-title mb-0">Quiz For {{ $quiz->courseML->title }}</h4>
                </div>
            </div>
            <div class="form-group">
                <label for="name">Quiz Name in {{ $quiz->courseML->language->name }} </label>
                <input readonly type="text" value="{{ $quiz->title }}" class="form-control">
            </div>
            <div class=" container mt-3 col-12">
                <a style="float: right" href="{{ route('questions.create', $quiz->id) }}"
                    class="btn btn-success {{ questionNo($quiz) }} ">Add Questions</a>
            </div>
            <!-- /.card -->
        </div>
    </section>
@endsection
