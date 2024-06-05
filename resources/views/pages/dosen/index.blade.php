<x-dashboard-layout>
    <x-slot name="title">{{ $title }}</x-slot>
    <section class="section">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="row">
            <div class="col-lg-11 ">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title fs-4">Data Dosen</h2>
                        <a href="{{ route('dosens.create') }}">
                            <button class="btn btn-primary mb-3">
                                <i class="bi bi-plus-circle"></i> Create New</button>
                        </a>
                        <!-- Table with stripped rows -->
                        <table class="table datatable table-hover">
                            <thead class="text-center">
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>NIDN</th>
                                    <th>Image</th>
                                    <th>Mata Kuliah</th>
                                    <th>Program Studi</th>
                                    <th>Jurusan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="">
                                <?php $no = 1;?>
                                @foreach ($dosens as $key => $dosen)
                                    <tr class="justify">
                                        <td class="text-center">{{ $no++ }}</td>
                                        <td>{{ $dosen->name }}</td>
                                        <td>{{ $dosen->nidn }}</td>
                                        <td><img src="{{ asset($dosen->image) }}" height="60"; width="60" class="rounded-circle"></td>
                                        <td>{{ $dosen->course->name }}</td>
                                        <td>{{ $dosen->prodi->name }}</td>
                                        <td>{{ $dosen->major->name}}</td>
                                        <td>
                                            <div class="">
                                                <a href="/admin/dosens/{{ $dosen->uuid }}">
                                                    <button class="btn btn-success btn-sm " name="view">
                                                        <i class="bi bi-eye"></i>
                                                    </button>
                                                </a>
                                                <a href="/admin/dosens/{{ $dosen->uuid }}/edit">
                                                    <button class="btn btn-primary btn-sm" name="edit">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </button>
                                                </a>
                                                <form action="{{ route('dosens.index') }}/{{ $dosen->uuid }}"
                                                    method="POST" class="d-inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Are you sure for that?')"
                                                        name="delete">
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
    </section>


</x-dashboard-layout>
