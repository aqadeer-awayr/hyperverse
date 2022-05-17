@extends('lms.layouts.master')
@section('content')
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('courses.index') }}">Courses</a>
            </li>
            <li class="breadcrumb-item active">Show</li>
        </ol>
    </nav>
    <div class="pagetitle">
        <div class="form-group">
            <input readonly type="text" value="{{ $course->title }}" class="form-control">
        </div>

    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        @include('lms.courses.ml.table-data')
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
