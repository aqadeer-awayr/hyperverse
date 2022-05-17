<table id="capital-data" class="table datatable">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th>Country Name</th>
            <th>Cities</th>
            {{-- <th>Status</th> --}}
            {{-- @role('Admin') --}}
            <th>Actions</th>
            {{-- @endrole --}}
        </tr>
    </thead>
    <tbody>
        @forelse ($capitals as $key => $capital)
            <tr id="{{ $capital->id }}">
                <td>{{ ++$key }}</td>
                <td>{{ $capital->name }}</td>
                <td>{{ $capital->capital_name }}</td>
                {{-- <td>{{ $capital->status == 1 ? 'Active' : 'In Active' }}</td> --}}
                {{-- @role('Admin') --}}
                <td>
                    <a href="{{ route('capitals.edit', $capital->id) }}"
                        class="btn {{ $capital->status === 1 ? 'btn-success' : 'btn-danger' }}"
                        style=" color: white;width:6rem">
                        {{ $capital->status == 1 ? 'Active' : 'Inactive' }}
                    </a>
                </td>
                {{-- @endrole --}}
            @empty
                <p>Dont Have any Capital</p>
        @endforelse
        </tr>

    </tbody>
</table>
<!-- End Table with stripped rows -->
