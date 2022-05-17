@extends('lms.layouts.master')

@section('content')
    <div class="pagetitle">
        <div class="row align-items-center">
            <div class="col-6">
                <h4 class="card-title mb-0">Profile</h4>
            </div>
            <div class="col-6">
                <a style="float: right" href="{{ route('profiles.create') }}" class="btn btn-success">New</a>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        @include('lms.cms.pages.profile.table-data')
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection