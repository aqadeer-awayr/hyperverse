<table id="announcement-data" class="table datatable">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th>Title</th>
            <th style="width: 50%">Description</th>
            {{-- @role('Admin') --}}
            <th>Actions</th>
            {{-- @endrole --}}
        </tr>
    </thead>
    <tbody>
        @forelse ($announcements as $key => $announcement)
            <tr id="{{ $announcement->id }}">
                <td style="width: 5%">{{ ++$key }}</td>
                <td style="width: 20%">{{ $announcement->title }}</td>
                <td style="width: 60%">{{ $announcement->description }}</td>
                {{-- @role('Admin') --}}
                <td style="width: 25%; display:flex; align-items: center;">
                    {{-- <a href="#" type="button" value="" class="btn btn-success"><i class="fa fa-eye"></i></a> --}}
                    {{-- pass id of announcements_multi_announcement table --}}
                    <a href="{{ route('announcements.edit', $announcement->id) }}" class="btn btn-primary ">
                        <i class="fa fa-edit"></i>
                    </a>
                    <button data-id="{{ $announcement->id }}" type="submit" value=""
                        class="btn btn-danger del-announcement" style="margin-left: 10px;">
                        <i class=" fa fa-trash"></i>
                    </button>
                </td>
                {{-- @endrole --}}
            @empty
                <p>Dont Have any announcement</p>
        @endforelse
        </tr>

    </tbody>
</table>
<!-- End Table with stripped rows -->
