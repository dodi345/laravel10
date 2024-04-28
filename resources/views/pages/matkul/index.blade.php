<x-dashboard-layout>
    <x-slot name="title">{{ $title }}</x-slot>
    <div class="row">
        <div class="col-lg-8 container">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Data Mata Kuliah</h3>
                    <a href="{{ route('matkuls.create') }}">
                        <button class="btn btn-primary mb-3">
                            <i class="bi bi-plus-circle"></i> Create New</button>
                    </a>
                    <!-- Table with stripped rows -->
                    <table class="table datatable table-hover">
                        <thead class="">
                            <tr>
                                <th>No</th>
                                <th>Kode Matkul</th>
                                <th>Nama Matkul</th>
                                <th>SKS</th>
                                <th>Jenis Matkul</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            @foreach ($matkuls as $key => $matkul)
                                <tr class="justify">
                                    <td class="">{{ $matkul->id }}</td>
                                    <td>{{ $matkul->code }}</td>
                                    <td>{{ $matkul->name }}</td>
                                    <td>{{ $matkul->sks }}</td>
                                    <td>{{ $matkul->type }}</td>
                                    <td>
                                        <div>
                                            <button class="btn btn-primary btn-sm" name="edit">
                                                <i class="bi bi-pencil-square"></i>
                                            </button>
                                            <form action="{{ route('matkuls.index') }}/{{ $matkul->id }}"
                                                method="POST" class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure for that?')" name="delete">
                                                    <i class="bi bi-x-circle"></i>
                                                </button>

                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

                </div>
            </div>

        </div>
    </div>
</x-dashboard-layout>
