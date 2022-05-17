<table id="lesson-data" class="table datatable">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th>Title</th>
            <th>Content</th>
            <th>Duration</th>
            {{-- @role('Admin') --}}
            <th>Actions</th>
            {{-- @endrole --}}
        </tr>
    </thead>
    <tbody>
        @forelse ($course->lessons as $key => $lesson)
            <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $lesson->title }}</td>
                <td>{{ $lesson->content }}</td>
                <td>{{ $lesson->duration }}</td>
                {{-- @role('Admin') --}}
                <td>
                    {{-- <a href="{{ route('lessons.show', $lesson->id) }}" type="button" value=""
                        class="btn btn-success"><i class="fa fa-eye"></i></a> --}}
                    {{-- pass id of lessons_multi_language table --}}
                    <a href="{{ route('lessons.edit', $lesson->id) }}" class="btn btn-primary ">
                        <i class="fa fa-edit"></i>
                    </a>
                    <button data-route="{{ route('lessons.destroy', $lesson->id) }}" type="submit" value=""
                        class="btn btn-danger del-lesson">
                        <i class=" fa fa-trash"></i>
                    </button>
                </td>
                </td>
                {{-- @endrole --}}
            @empty
                <p>Dont Have any lesson</p>
        @endforelse
        </tr>

    </tbody>
</table>
<!-- End Table with stripped rows -->
