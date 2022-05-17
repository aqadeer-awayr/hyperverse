@extends('lms.layouts.master')

@section('content')
    <nav aria-label="breadcrumb" class="main-breadcrumbs">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">Course </li>
        </ol>
    </nav>
    <div class="pagetitle">
        <div class="row align-items-center">
            <div class="col-6">
                <h4 class="card-title mb-0">Courses</h4>
            </div>
            <div class="col-6">
                <a style="float: right" href="{{ route('courses.create') }}" class="btn btn-success">New</a>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        @include('lms.courses.table-data')
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
