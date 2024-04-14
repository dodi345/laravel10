<x-dashboard-layout>
    <x-slot name="title">{{ $title }}</x-slot>
    <div class="card" style="width : 50rem;">
        <img src="https://source.unsplash.com/1200x400?" class="card-img-top" alt="{{ $dosen->nama_dosen }}">
        <div class="card-body">
          <h2 class="card-title fs-1">{{ $dosen->nama_dosen }}</h2>
          <h5 class="card-text">NIP : {{ $dosen->nip }}</h5>
          <h5 class="card-text">Email : {{ $dosen->email }}</h5>
          <h5 class="card-text">No Telepon : {{ $dosen->no_telp }}</h5>
          <p class="card-text">Motto : </p>
          <p class="card-text">{{ $dosen->motto }}</p>
          <a href="/admin/dosen" class="btn btn-primary">Back</a>
        </div>
      </div>
</x-dashboard-layout>
