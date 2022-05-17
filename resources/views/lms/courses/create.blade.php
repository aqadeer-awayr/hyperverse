@extends('lms.layouts.master')

@section('content')
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('courses.index') }}">Courses</a>
            </li>
            <li class="breadcrumb-item active">Create</li>
        </ol>
    </nav>
    <section>
        <div class="card-body">
            <div class="form-group">
                <strong class="d-inline-block mb-2">Choose languages</strong>
                <select class="js-example-basic-single w-100" id="multi-languages" multiple="multiple">
                    @foreach (languages() as $key => $language)

                        <option value={{ $language->id }}>{{ $language->name }}</option>
                    @endforeach
                </select>
            </div>

            {{ Form::open(['url' => route('courses.store'), 'enctype' => 'multipart/form-data', 'file' => true]) }}
            <div class="form-group">
                <label for="name">Course Title</label>
                <input type="text" id="name" name="title" class="form-control">
                @if ($errors->has('title'))
                    <span class="help-block">
                        <strong class="text-danger">{{ $errors->first('title') }}</strong>
                    </span>
                @endif
            </div>

            <div class="cloning">
                <div id="language_1">
                    <input type="hidden" name="language_id[1]" value="1">
                    <strong class="d-inline-block mb-2">Course in English</strong>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input required type="text" id="name" name="name[1]" class="form-control">
                        @if ($errors->has('name.1'))
                            <span class="help-block">
                                <strong class="text-danger">{{ $errors->first('name.1') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea required name="description[1]" class="form-control" rows="4"
                            maxlength="1500"></textarea>
                        @if ($errors->has('description'))
                            <span class="help-block">
                                <strong class="text-danger">{{ $errors->first('description') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col">
                            <strong class="d-inline-block mb-2">Upload Course Image</strong>
                            <input type="file" class="dropify" name="image[1]"
                                data-allowed-file-extensions="jpg png">
                        </div>
                        <div class="col">
                            <strong class="d-inline-block mb-2">Upload Course Logo</strong>
                            <input type="file" class="dropify" name="logo[1]" data-allowed-file-extensions="png jpg">
                        </div>
                    </div>

                </div>
            </div>
            {{-- <div class=" form-group row">
                <div class="wrapper date-wrapper">
                    <strong class="d-inline-block mb-2">Pick Start Date</strong>
                    <label for="datepicker">
                        <input type="text" id="datepicker-started-at" name="started_at" autocomplete="off"
                            placeholder="Start Date">
                    </label>
                </div>
                <div class="wrapper date-wrapper">
                    <strong class="d-inline-block mb-2">Pick End Date</strong>
                    <label for="datepicker">
                        <input type="text" id="datepicker-finished-at" autocomplete="off" name="finished_at"
                            placeholder="Finish Date">
                    </label>
                </div>
            </div> --}}

            <div class="mt-3 col-12">
                <a href="{{ route('courses.index') }}" class="btn btn-secondary">Cancel</a>
                <input style="float: right" type="submit" value="Create" class="btn btn-success float-right">
            </div>
            {{ Form::close() }}
        </div>
        <!-- /.card-body -->
    </section>
    <!-- /.content -->
@endsection
