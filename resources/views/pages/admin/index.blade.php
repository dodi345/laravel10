<x-dashboard-layout>
    <x-slot name="title">{{ $title }}</x-slot>

    <div class="d-flex gap-4">
        <div class="card" style="width: 21rem; border-radius:10px; overflow:hidden;">
            <div class="card-body bg-primary" style="background-image: var(--bs-gradient)">
                <h5 class="card-title text-center text-white">Selamat Datang, {{ auth()->user()->name }}</h5>
                <p class="card-text text-center text-white">Salam sehat semuanya, jangan lupa bahagia, misyu all</p>
            </div>
        </div>

        <div class="card" style="width: 18; border-radius:10px; overflow:hidden;">
            <div class="card-body bg-danger" style="background-image: var(--bs-gradient)">
                <h5 class="card-title text-center text-white">Total User</h5>
                <p class="card-text text-center text-white fs-5">{{ $totalusers }}</p>
            </div>
        </div>

    </div>

    {{-- <script>
        Swal.fire({
            title: 'Hallo Dunia'
        })
    </script> --}}
</x-dashboard-layout>
