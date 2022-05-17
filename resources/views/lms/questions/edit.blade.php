@extends('lms.layouts.master')

@section('content')
    <nav aria-label="breadcrumb" class="main-breadcrumbs">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('quizzes.create', $question->quiz->course_ml_id) }}">Quizzes</a>
            </li>
            <li class="breadcrumb-item"><a href="{{ route('questions.create', $question->quiz->id) }}">Question</a>
            </li>
            <li class="breadcrumb-item active">Edit </li>
        </ol>
    </nav>
    <section>
        <div class="card-body">
            {{ Form::open(['url' => route('questions.update', $question->id),'enctype' => 'multipart/form-data','file' => true]) }}
            @method('PUT')
            <h3 class="card-title">Update Question
            </h3>
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Title in</label>
                    <input type="text" id="question" value="{{ old('question', $question->question) }}" name="question"
                        class="form-control">
                    @if ($errors->has('question'))
                        <span class="help-block">
                            <strong class="text-danger">{{ $errors->first('question') }}</strong>
                        </span>
                    @endif
                </div>

                <div id="options">
                    @foreach ($question->jsonData as $key => $option)
                        <div class="form-group">
                            <div class="position-relative radio-button-inline-css">
                                <input {{ $question->answer == ++$key ? 'checked' : '' }} value="{{ $key }}"
                                    class="form-check-input" type="radio" name="answer">

                                <input value="{{ $option }}" placeholder="Enter Option Here." type="text"
                                    name="options[]" class="form-control">

                                <a class="btn btn-danger question-options delete_row delete-cross-icon">x</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="mt-3 col-12">
                <a id="add_option" class="btn btn-secondary {{ count($question->jsonData) == 5 ? 'disabled' : '' }}">Add
                    Options </a>
                <input style="float: right" type="submit" value="Save" class="btn btn-success float-right">
            </div>
            {{ Form::close() }}
        </div>
    </section>
@endsection
