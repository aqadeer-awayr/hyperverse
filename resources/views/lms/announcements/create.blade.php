@extends('lms.layouts.master')

@section('content')
    <section>
        <div class="card-body">
            {{ Form::open(['url' => route('announcements.store'), 'enctype' => 'multipart/form-data', 'file' => true]) }}

            <div class="card-body">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" id="title" value="{{ old('title') }}" name="title" class="form-control">
                    @if ($errors->has('title'))
                        <span class="help-block">
                            <strong class="text-danger">{{ $errors->first('title') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="title">Description</label>
                    <textarea class="form-control" name="description" id="feed-back-section" cols="30" rows="5"
                        maxlength="1000"></textarea>

                    @if ($errors->has('description'))
                        <span class="help-block">
                            <strong class="text-danger">{{ $errors->first('description') }}</strong>
                        </span>
                    @endif
                </div>

            </div>

            <div class="mt-3 col-12">
                <a href="{{ route('announcements.index') }}" class="btn btn-secondary">Cancel</a>
                <input style="float: right" type="submit" value="Save" class="btn btn-success float-right">
            </div>
            {{ Form::close() }}
    </section>
    </div>
    <!-- /.description -->
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            // location.reload();
            $.noConflict()
            // $('#abc').DataTable();
        });
        $(document).on('click', '.del-description-lesson-ml', function() {

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
                            'X-CSRF-TOKEN': $('meta[title="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        type: 'DELETE',
                        url: url,
                        success: function(response) {
                            console.log(response)
                            $('#announcementss-table-data').html(response)
                        }
                    })
                }
            })
        })
    </script>
@endsection
