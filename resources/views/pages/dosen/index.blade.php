<x-dashboard-layout>
    <x-slot name="title">{{ $title }}</x-slot>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">NIP</th>
            <th scope="col">Nama</th>
            <th scope="col">Mata Kuliah</th>
            <th scope="col">Gambar</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($dosens as $key => $dosen )
            <tr>
              <td>{{ $dosen->nip }}</td>
              <td>{{ $dosen->nama }}</td>
              <td>{{ $dosen->matkul }}</td>
              <td><img src="{{ asset('storage/' . $dosen->image) }}" alt="" width="100"></td>
            </tr>
            @endforeach

        </tbody>
      </table>
</x-dashboard-layout>
