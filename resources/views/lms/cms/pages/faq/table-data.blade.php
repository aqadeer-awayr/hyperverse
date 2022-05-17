<table id="faq-data" class="table datatable">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th>Language</th>
            <th style="width: 50%">Section</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($faqs as $key => $faq)
            <tr id="{{ $faq->id }}">
                <td style="width: 5%">{{ ++$key }}</td>
                <td style="width: 20%">{{ $faq->language->name }}</td>
                <td style="width: 60%">{{ $faq->for_page }}</td>
                {{-- @role('Admin') --}}
                <td style="width: 25%; display:flex; align-items: center;">
                    {{-- <a href="#" type="button" value="" class="btn btn-success"><i class="fa fa-eye"></i></a> --}}
                    {{-- pass id of faqs_multi_faq table --}}
                    <a href="{{ route('faqs.edit', $faq->id) }}" class="btn btn-primary ">
                        <i class="fa fa-edit"></i>
                    </a>
                    <button data-id="{{ $faq->id }}" type="submit" value="" class="btn btn-danger del-faq"
                        style="margin-left: 10px;">
                        <i class=" fa fa-trash"></i>
                    </button>
                </td>
                {{-- @endrole --}}
            @empty
                <p>Dont Have any FAQ`s</p>
        @endforelse
        </tr>

    </tbody>
</table>
<!-- End Table with stripped rows -->
