<x-dashboard-layout>
    <x-slot name="title">{{ $title }}</x-slot>
    <table class="table table-hover container">
        <thead class="table-warning justify-content-center">
          <tr>
            <th scope="col">No</th>
            <th scope="col">NIP</th>
            <th scope="col">Nama</th>
            <th scope="col">Foto</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($dosens as $key => $dosen )
            <tr class="justify">
              <td>{{ $dosen->id }}</td>
              <td>{{ $dosen->nip }}</td>
              <td>{{ $dosen->nama_dosen }}</td>
              <td><img src="https://source.unsplash.com/600x500?" alt="" width="50" class="rounded"></td>
              <td>
                <div class="">
                  <button class="btn btn-primary btn-sm">edit</button>
                  <button class="btn btn-danger btn-sm">delete</button>
                  <a href="/admin/dosen/detail/{{ $dosen->username}}" class="btn btn-success btn-sm">detail</a>
                </div>
              </td>
            </tr>
            @endforeach

        </tbody>
      </table>
</x-dashboard-layout>
