<x-dashboard-layout>
    <x-slot name="title">{{ $title }}</x-slot>
    <div class="card container" style="width : 50rem;">
        <div class="card-body">

            @if ($dosen->image)
                <div style=" max-height: 350px; overflow: hidden;">
                    <img src="{{ asset($dosen->image) }}" alt="" class="img-fluid">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?" class="card-img-top mt-3" alt="{{ $dosen->nama_dosen }}">
            @endif
            <h2 class="card-title fs-1">{{ $dosen->name }}</h2>
            <h5 class="card-text">NIP : {{ $dosen->nip }}</h5>
            <h5 class="card-text">Email : {{ $dosen->email }}</h5>
            <h5 class="card-text">No Telepon : {{ $dosen->telp }}</h5>
            <p class="card-text">Motto : </p>
            <p class="card-text">{{ $dosen->motto }}</p>
            <a href="{{ route('dosens.index') }}" class="btn btn-primary">Back</a>
        </div>
    </div>
</x-dashboard-layout>
