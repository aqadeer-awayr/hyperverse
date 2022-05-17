@extends('lms.layouts.master')

@section('content')
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('languages.index') }}">Languages</a>
            </li>
        </ol>
    </nav>

    <section>
        <div class="card-body">
            {{ Form::open(['url' => route('languages.store'), 'enctype' => 'multipart/form-data', 'file' => true]) }}

            <div class="card-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" value="{{ old('name') }}" name="name" class="form-control">
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong class="text-danger">{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="name">Language</label>
                    <input type="text" class="form-control" name="lang" value="{{ old('lang') }}">

                    @if ($errors->has('lang'))
                        <span class="help-block">
                            <strong class="text-danger">{{ $errors->first('lang') }}</strong>
                        </span>
                    @endif
                </div>

            </div>

            <div class="mt-3 col-12">
                <a href="{{ route('languages.index') }}" class="btn btn-secondary">Cancel</a>
                <input style="float: right" type="submit" value="Save" class="btn btn-success float-right">
            </div>
            {{ Form::close() }}
    </section>
    </div>
    <!-- /.lang -->
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            // location.reload();
            $.noConflict()
            // $('#abc').DataTable();
        });
        $(document).on('click', '.del-lang-lesson-ml', function() {

            var url = $(this).attr('data-route');
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        type: 'DELETE',
                        url: url,
                        success: function(response) {
                            console.log(response)
                            $('#languages-table-data').html(response)
                        }
                    })
                }
            })
        })
    </script>
@endsection
