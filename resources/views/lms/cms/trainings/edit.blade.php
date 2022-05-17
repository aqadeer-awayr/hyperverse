@extends('lms.layouts.master')

@section('content')
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('trainings.index') }}">Trainings</a>
            </li>
        </ol>
    </nav>
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                {{ Form::open(['url' => route('trainings.update', $training->id),'enctype' => 'multipart/form-data','file' => true]) }}
                @method('PUT')
                <div class="card-header">
                    <h3 class="card-title">Training</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <strong class="d-inline-block mb-2">Choose languages</strong>
                        <select name="for_user" class="js-example-basic-single w-100">
                            <option {{ $training->for_user == 'verified' ? 'selected' : '' }} value="verified">Complete
                                Profile Users</option>
                            <option {{ $training->for_user == 'non_verified' ? 'selected' : '' }} value="non_verified">Non
                                Complete Profile Users</option>
                            {{-- <option value="initial_login">For First Login</option> --}}
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" id="title" value="{{ old('title', $training->title) }}" name="title"
                            class="form-control">
                        @if ($errors->has('title'))
                            <span class="help-block">
                                <strong class="text-danger">{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="sub-text" class="mb-2 mt-3"><b>Choose Video or Drag Here</b></label>
                            <input type="file" class="dropify" name="training" accept=".webm,.MP4,.mpeg">
                        </div>
                    </div>
                    <div class="mt-3 col-12">
                        <a href="{{ route('trainings.index') }}" class="btn btn-secondary">Back</a>
                        <input type="submit" value="Update" class="btn btn-success float-right">
                    </div>
                </div>
                <!-- /.card -->

                {{ Form::close() }}
            </div>
        </div>
    @endsection
