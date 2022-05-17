<table id="quiz-data" class="table datatable">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th>Title</th>
            <th>Status</th>

            {{-- @role('Admin') --}}
            <th>Actions</th>
            {{-- @endrole --}}
        </tr>
    </thead>
    <tbody>
        @forelse ($course->quizzes as $key => $quiz)
            <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $quiz->title }}</td>
                <td>
                    <a href="{{ route('quizzes.status', $quiz->id) }}"
                        class="btn {{ $quiz->status === 'disabled' ? 'btn-success' : 'btn-danger' }}"
                        style=" color: white;width:6rem">
                        {{ $quiz->status == 'enabled' ? 'Disabled' : 'Enabled' }}
                    </a>
                </td>

                {{-- @role('Admin') --}}
                <td>
                    <a href="{{ route('quizzes.show', $quiz->id) }}" type="button" value="" class="btn btn-success"><i
                            class="fa fa-eye"></i></a>
                    {{-- pass id of quizzes_multi_quiz table --}}
                    <a href="{{ route('quizzes.edit', $quiz->id) }}" class="btn btn-primary ">
                        <i class="fa fa-edit"></i>
                    </a>
                    <button data-route="{{ route('quizzes.destroy', $quiz->id) }}" type="submit" value=""
                        class="btn btn-danger del-quiz">
                        <i class=" fa fa-trash"></i>
                    </button>
                </td>
                </td>
                {{-- @endrole --}}
            @empty
                <p>Dont Have any quiz</p>
        @endforelse
        </tr>

    </tbody>
</table>
<!-- End Table with stripped rows -->
