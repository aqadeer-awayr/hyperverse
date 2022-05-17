<table id="profile-data" class="table datatable">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th>Language</th>
            <th style="width: 50%">Section</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($profiles as $key => $profile)
            <tr id="{{ $profile->id }}">
                <td style="width: 5%">{{ ++$key }}</td>
                <td style="width: 20%">{{ $profile->language->name }}</td>
                <td style="width: 60%">{{ $profile->for_page }}</td>
                {{-- @role('Admin') --}}
                <td style="width: 25%; display:flex; align-items: center;">
                    {{-- <a href="#" type="button" value="" class="btn btn-success"><i class="fa fa-eye"></i></a> --}}
                    {{-- pass id of profiles_multi_profile table --}}
                    <a href="{{ route('profiles.edit', $profile->id) }}" class="btn btn-primary ">
                        <i class="fa fa-edit"></i>
                    </a>
                    <button data-id="{{ $profile->id }}" type="submit" value="" class="btn btn-danger del-profile"
                        style="margin-left: 10px;">
                        <i class=" fa fa-trash"></i>
                    </button>
                </td>
                {{-- @endrole --}}
            @empty
                <p>Dont Have any profile`s</p>
        @endforelse
        </tr>

    </tbody>
</table>
<!-- End Table with stripped rows -->
