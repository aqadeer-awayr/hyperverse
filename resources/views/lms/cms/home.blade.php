@extends('lms.layouts.master')
@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Home Page </h5>

                        {{-- <form class="row g-3">
                            <div class="col-md-12">
                                <label for="sub-text" class="mb-2"><b>Hero section Title</b></label>
                                <input type="text" class="form-control" id="inputName5">
                            </div>

                        </form>
                        <label for="sub-text" class="mb-2 mt-3"><b>Hero section paragraph</b></label>
                        <div class="quill-editor-default" id="sub-text">
                            <p>Hello World!</p>
                            <p>This is Quill <strong>default</strong> editor</p>
                        </div> --}}
                        {{ Form::open(['url' => route('upload.image'), 'enctype' => 'multipart/form-data', 'file' => true]) }}
                        {{ Form::hidden('description', 'hero-header') }}
                        {{ Form::hidden('width', 1450) }}
                        {{ Form::hidden('height', 818) }}
                        <div class="row">
                            <div class="col">
                                <label for="sub-text" class="mb-2 mt-3"><b>Hero section background image (1450 x 818
                                        )</b></label>
                                <input required type="file" class="dropify" name="image"
                                    data-allowed-file-extensions="jpg png">
                            </div>
                        </div>
                        <div class="mt-3 col-12">
                            <input style="float: right" type="submit" value="Upload" class="btn btn-success float-right">
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>

            </div>
            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Navbar </h5>
                        {{ Form::open(['url' => route('upload.image'), 'enctype' => 'multipart/form-data', 'file' => true]) }}
                        {{ Form::hidden('description', 'logo') }}
                        {{ Form::hidden('width', 223) }}
                        {{ Form::hidden('height', 40) }}
                        <div class="row">
                            <div class="col">
                                <label for="sub-text" class="mb-2 mt-3"><b>navbar logo ( 223 x 40 )</b></label>
                                <input required type="file" class="dropify" name="image"
                                    data-allowed-file-extensions="jpg png">
                            </div>
                        </div>
                        <div class="mt-3 col-12">
                            <input style="float: right" type="submit" value="Upload" class="btn btn-success float-right">
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>


            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Home Page </h5>

                        {{-- <form class="row g-3">
                            <div class="col-md-12">
                                <label for="sub-text" class="mb-2"><b>Hero section Title</b></label>
                                <input type="text" class="form-control" id="inputName5">
                            </div>

                        </form>
                        <label for="sub-text" class="mb-2 mt-3"><b>Hero section paragraph</b></label>
                        <div class="quill-editor-default" id="sub-text">
                            <p>Hello World!</p>
                            <p>This is Quill <strong>default</strong> editor</p>
                        </div> --}}
                        {{ Form::open(['url' => route('upload.image'), 'enctype' => 'multipart/form-data']) }}
                        {{ Form::hidden('description', 'community') }}
                        {{ Form::hidden('width', 1450) }}
                        {{ Form::hidden('height', 964) }}
                        <div class="row">
                            <div class="col">
                                <label for="sub-text" class="mb-2 mt-3"><b>Community section background image (1450
                                        x964)</b></label>
                                <input required type="file" class="dropify" name="image"
                                    data-allowed-file-extensions="jpg png">
                            </div>
                            <div class="mt-3 col-12">
                                <input style="float: right" type="submit" value="Upload"
                                    class="btn btn-success float-right">
                            </div>
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
