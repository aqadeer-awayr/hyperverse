<table id="course-data" class="table datatable table-bordered table-responsive">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th>Course Title</th>
            <th>Course Path</th>
            {{-- @role('Admin') --}}
            <th>Actions</th>
            {{-- @endrole --}}
        </tr>
    </thead>
    <tbody>
        @forelse ($courses as $key => $course)
            <tr id="{{ $course->id }}">
                <td>{{ ++$key }}</td>
                <td>{{ $course->title }}</td>
                <td>{{ $course->getPath() }}</td>
                {{-- @role('Admin') --}}
                <td>
                    <a href="{{ route('courses.show', $course->id) }}" type="button" value=""
                        class="btn btn-success"><i class="fa fa-eye"></i></a>
                    {{-- pass id of courses_multi_language table --}}
                    <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-primary ">
                        <i class="fa fa-edit"></i>
                    </a>
                    <button data-id="{{ $course->id }}" type="submit" value="" class="btn btn-danger del-course">
                        <i class=" fa fa-trash"></i>
                    </button>
                </td>
                </td>
                {{-- @endrole --}}
            @empty
                <p>Dont Have any Course</p>
        @endforelse
        </tr>

    </tbody>
</table>
<!-- End Table with stripped rows -->
