<x-dashboard-layout>
    <x-slot name="title">{{ $title }}</x-slot>
    <div class="card container" style="width : 50rem;">
        <div class="card-body">
            <h2 class="card-title fs-1">{{ $matkul->code }}</h2>
            <h5 class="card-text">NIP : {{ $matkul->name }}</h5>
            <h5 class="card-text">Email : {{ $matkul->sks }}</h5>
            <h5 class="card-text">No Telepon : {{ $matkul->type }}</h5>
            <a href="{{ route('matkuls.index') }}" class="btn btn-primary">Back</a>
        </div>
    </div>
</x-dashboard-layout>
