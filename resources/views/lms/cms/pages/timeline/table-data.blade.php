<table id="timeline-data" class="table datatable">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th>Language</th>
            <th style="width: 50%">Section</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($timelines as $key => $timeline)
            <tr id="{{ $timeline->id }}">
                <td style="width: 5%">{{ ++$key }}</td>
                <td style="width: 20%">{{ $timeline->language->name }}</td>
                <td style="width: 60%">{{ $timeline->for_page }}</td>
                {{-- @role('Admin') --}}
                <td style="width: 25%; display:flex; align-items: center;">
                    {{-- <a href="#" type="button" value="" class="btn btn-success"><i class="fa fa-eye"></i></a> --}}
                    {{-- pass id of timelines_multi_timeline table --}}
                    <a href="{{ route('timelines.edit', $timeline->id) }}" class="btn btn-primary ">
                        <i class="fa fa-edit"></i>
                    </a>
                    <button data-id="{{ $timeline->id }}" type="submit" value="" class="btn btn-danger del-timeline"
                        style="margin-left: 10px;">
                        <i class=" fa fa-trash"></i>
                    </button>
                </td>
                {{-- @endrole --}}
            @empty
                <p>Dont Have any timeline`s</p>
        @endforelse
        </tr>

    </tbody>
</table>
<!-- End Table with stripped rows -->
