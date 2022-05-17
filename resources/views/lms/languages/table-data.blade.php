<table id="language-data" class="table datatable">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th>Title</th>
            <th>Language</th>
            {{-- @role('Admin') --}}
            <th>Actions</th>
            {{-- @endrole --}}
        </tr>
    </thead>
    <tbody>
        @forelse ($languages as $key => $language)
            <tr id="{{ $language->id }}">
                <td>{{ ++$key }}</td>
                <td>{{ $language->name }}</td>
                <td>{{ $language->lang }}</td>
                {{-- @role('Admin') --}}
                <td>
                    {{-- <a href="#" type="button" value="" class="btn btn-success"><i class="fa fa-eye"></i></a> --}}
                    {{-- pass id of languages_multi_language table --}}
                    <a href="{{ route('languages.edit', $language->id) }}" class="btn btn-primary ">
                        <i class="fa fa-edit"></i>
                    </a>
                    <button data-id="{{ $language->id }}" type="submit" value="" class="btn btn-danger del-language">
                        <i class=" fa fa-trash"></i>
                    </button>
                    <a href="{{ route('languages.show', $language->id) }}"
                        class="btn {{ $language->status === 'disabled' ? 'btn-success' : 'btn-danger' }}"
                        style=" color: white;width:6rem">
                        {{ $language->status == 'enabled' ? 'Disabled' : 'Enabled' }}
                    </a>
                </td>
                {{-- @endrole --}}
            @empty
                <p>Dont Have any language</p>
        @endforelse
        </tr>

    </tbody>
</table>
<!-- End Table with stripped rows -->
