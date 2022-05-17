<table id="quiz-data" class="table datatable">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th>Title</th>

            {{-- @role('Admin') --}}
            <th>Actions</th>
            {{-- @endrole --}}
        </tr>
    </thead>
    <tbody>
        @forelse ($quiz->questions as $key => $question)
            <tr id="{{ $question->id }}">
                <td>{{ ++$key }}</td>
                <td>{{ $question->question }}</td>
                {{-- @role('Admin') --}}
                <td>
                    {{-- <a href="{{ route('questions.show', $question->id) }}" type="button" value=""
                        class="btn btn-success"><i class="fa fa-eye"></i></a> --}}
                    {{-- pass id of quizs_multi_language table --}}
                    <a href="{{ route('questions.edit', $question->id) }}" class="btn btn-primary ">
                        <i class="fa fa-edit"></i>
                    </a>
                    {{-- data-id="{{ $announcement->id }}" --}}
                    <button data-id="{{ $question->id }}" type="submit" value="" class="btn btn-danger del-question">
                        <i class=" fa fa-trash"></i>
                    </button>
                </td>
                </td>
                {{-- @endrole --}}
            @empty
                <p>Dont Have any Question</p>
        @endforelse
        </tr>

    </tbody>
</table>
<!-- End Table with stripped rows -->
