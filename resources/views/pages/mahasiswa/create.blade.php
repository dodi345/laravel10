<x-dashboard-layout>
    <x-slot name="title">{{ $title }}</x-slot>
    <div class="card col-lg-8 rounded container mt-3">

        <div class="card-body ">
            <h5 class="card-title">Data Mahasiswa</h5>
            <form action="{{ route('mahasiswa.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <label for="name" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                            id="name" value="{{ old('name') }}" required>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                    <div class="col-sm-10">
                        <input type="number" name="nim" class="form-control @error('nim') is-invalid @enderror"
                            id="nim" value="{{ old('nim') }}" required>
                        @error('nim')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="kelas_id" class="col-sm-2 col-form-label">Kelas</label>
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example" name="kelas_id">
                            @foreach ($class as $kelas)
                                    <option class="ms-3" value="{{ $kelas->id }}" selected>{{ $kelas->kelas }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="semester_id" class="col-sm-2 col-form-label">Semester</label>
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example" name="semester_id">
                            @foreach ($semesters as $semester)
                                    <option class="ms-3" value="{{ $semester->id }}" selected>{{ $semester->semester }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="course_id" class="col-sm-2 col-form-label">Program Studi</label>
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example" name="prodi_id">
                            @foreach ($prodis as $prodi)
                                    <option class="ms-3" value="{{ $prodi->id }}" selected>{{ $prodi->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="course_id" class="col-sm-2 col-form-label">Jurusan</label>
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example" name="major_id">
                            @foreach ($majors as $major)
                                    <option class="ms-3" value="{{ $major->id }}" selected>{{ $major->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('mahasiswa.index') }}">
                        <button type="button" class="btn btn-secondary">Cancel</button>
                    </a>
                </div>
            </form><!-- End Horizontal Form -->
        </div>
    </div>


</x-dashboard-layout>

<script>
    $(document).ready(function() {
        $('#name').on('input', function() {
            var title = $(this).val();
            var slug = title.toLowerCase().replace(/[^a-z0-9]+/g, '-');
            $('#username').val(slug);
        });
    });

    function previewImage() {
        const image = document.getElementById('image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
