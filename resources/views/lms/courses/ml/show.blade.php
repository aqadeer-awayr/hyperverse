@extends('lms.layouts.master')
@section('content')
    <nav aria-label="breadcrumb" class="main-breadcrumbs">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('courses.index') }}">Course</a>
            </li>
            <li class="breadcrumb-item"><a href="{{ route('courses.show', $course->course->id) }}">ML</a>
            </li>
            <li class="breadcrumb-item active">Show </li>
        </ol>
    </nav>
    <section>
        <div class="card-body">
            <div class="row align-items-center mb-2">
                <div class="col-6">
                    <h4 class="card-title mb-0">Course For {{ $course->course->title }}</h4>
                </div>
            </div>
            <div class="form-group">
                <label for="name">Course Name in {{ $course->language->name }} </label>
                <input readonly type="text" value="{{ $course->name }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="description">Course Description in
                    {{ $course->language->name }}</label>
                <textarea readonly class="form-control" rows="4" maxlength="150">{{ $course->description }}</textarea>
            </div>
            <div class=" container mt-3 col-12">
                <a href="{{ route('quizzes.create', $course->id) }}" class="btn btn-success">Quizzes</a>
                <a style="float: right" href="{{ route('lessons.create', $course->id) }}"
                    class="btn btn-success">Lessons</a>
            </div>
            <!-- /.card -->
        </div>
    </section>
@endsection
