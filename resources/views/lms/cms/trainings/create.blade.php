@extends('lms.layouts.master')
@section('content')
    <div class="pagetitle">
        <h1>Training</h1>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        {{ Form::open(['url' => route('trainings.store'), 'enctype' => 'multipart/form-data', 'file' => true]) }}
                        <div class="form-group">
                            <strong class="d-inline-block mb-2">Choose languages</strong>
                            <select name="for_user" class="js-example-basic-single w-100">
                                <option value="verified">Complete Profile Users</option>
                                <option value="non_verified">Non Complete Profile Users</option>
                                {{-- <option value="initial_login">For First Login</option> --}}
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Title</label>
                            <input type="text" id="name" value="{{ old('title') }}" name="title" class="form-control">
                            @if ($errors->has('title'))
                                <span class="help-block">
                                    <strong class="text-danger">{{ $errors->first('title') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="sub-text" class="mb-2 mt-3"><b>Choose Video or Drag Here</b></label>
                                <input required type="file" class="dropify" name="training"
                                    accept=".webm,.MP4,.mpeg">
                            </div>
                        </div>
                        <div class="mt-3 col-12">
                            <a href="{{ route('trainings.index') }}" class="btn btn-secondary">Cancel</a>
                            <input style="float: right" type="submit" value="Upload" class="btn btn-success float-right">
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
