<table class="table datatable table-bordered table-responsive">
    <thead>
        <tr>
            <th style="width: 25%">Language</th>
            <th style="width: 25%">Name</th>
            <th style="width: 45%"> Description</th>
            {{-- @role('Admin') --}}
            <th style="width: 20%">Actions</th>
            {{-- @endrole --}}
        </tr>
    </thead>
    <tbody>
        @forelse ($course->multiLanguages as $course)
            <tr id="{{ $course->id }}">
                <td>{{ $course->language->name }}</td>
                <td>{{ $course->name }}</td>
                <td>{{ $course->path }}</td>
                {{-- @role('Admin') --}}
                <td>
                    <a href="{{ route('course_ml.show', $course->id) }}" type="button" value=""
                        class="btn btn-success"><i class="fa fa-eye"></i></a>
                    {{-- pass id of courses_multi_language table --}}
                    <a href="{{ route('course_ml.edit', $course->id) }}" class="btn btn-primary ">
                        <i class="fa fa-edit"></i>
                    </a>
                    <button data-id="{{ $course->id }}" type="submit" value="" class="btn btn-danger del-course-ml">
                        <i class=" fa fa-trash"></i>
                    </button>
                </td>
                {{-- @endrole --}}
            </tr>
        @empty
            <p>Dont Have any Course</p>
        @endforelse
        </tr>

    </tbody>
</table>
<!-- End Table with stripped rows -->
