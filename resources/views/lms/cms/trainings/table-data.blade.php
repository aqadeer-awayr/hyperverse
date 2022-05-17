<table id="training-data" class="table datatable">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th>Title</th>
            <th>Path</th>
            <th>For Profile</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($trainings as $key => $training)
            <tr id={{ $training->id }}>
                <td>{{ ++$key }}</td>
                <td>{{ $training->title }}</td>
                <td>{{ $training->for_user == 'verified' ? 'For Complete Profile Users' : 'For Non Complete Profile Users' }}
                </td>
                <td>{{ $training->path }}</td>
                <td>{{ $training->status }}</td>
                <td>
                    <a href="{{ route('trainings.edit', $training->id) }}" class="btn btn-primary ">
                        <i class="fa fa-edit"></i>
                    </a>
                    <button data-id="{{ $training->id }}" type="submit" value="" class="btn btn-danger del-training">
                        <i class=" fa fa-trash"></i>
                    </button>
                </td>
            @empty
                <p>Dont Have any training video</p>
        @endforelse
        </tr>

    </tbody>
</table>
<!-- End Table with stripped rows -->
