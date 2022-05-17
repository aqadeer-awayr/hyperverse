<table id="home_page_text-data" class="table datatable">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th>Language</th>
            <th>Page</th>
            <th>Section</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($home_page as $key => $home_page_text)
            <tr id="{{ $home_page_text->id }}">
                <td style="width: 5%">{{ ++$key }}</td>
                <td>{{ $home_page_text->language->name }}</td>
                <td>{{ $home_page_text->for_page }}</td>
                <td>{{ $home_page_text->slug }}</td>
                {{-- @role('Admin') --}}
                <td style="width: 25%; display:flex; align-items: center;">
                    {{-- <a href="#" type="button" value="" class="btn btn-success"><i class="fa fa-eye"></i></a> --}}
                    {{-- pass id of home_page_texts_multi_home_page_text table --}}
                    <a href="{{ route('home-page.edit', $home_page_text->id) }}" class="btn btn-primary ">
                        <i class="fa fa-edit"></i>
                    </a>
                    <button data-id="{{ $home_page_text->id }}" type="submit" value=""
                        class="btn btn-danger del-home_page_text" style="margin-left: 10px;">
                        <i class=" fa fa-trash"></i>
                    </button>
                </td>
                {{-- @endrole --}}
            @empty
                <p>Dont Have any Home Page Text Langauge</p>
        @endforelse
        </tr>

    </tbody>
</table>
<!-- End Table with stripped rows -->
