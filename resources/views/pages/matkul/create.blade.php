<x-dashboard-layout>
    <x-slot name="title">{{ $title }}</x-slot>
    <div class="card col-lg-8 rounded container mt-3">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card-body ">
            <h5 class="card-title">Create Mata Kuliah</h5>
            <form action="{{ route('matkuls.store') }}" method="post">
                @csrf
                <div class="row mb-3">
                    <label for="code" class="col-sm-2 col-form-label">Kode Matkul</label>
                    <div class="col-sm-8">
                        <input type="text" name="code" class="form-control" id="code" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="name" class="col-sm-2 col-form-label">Nama Matkul</label>
                    <div class="col-sm-8">
                        <input type="text" name="name" class="form-control" id="name" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="sks" class="col-sm-2 col-form-label">Jumlah SKS</label>
                    <div class="col-sm-8">
                        <input type="text" name="sks" class="form-control" id="sks" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="type" class="col-sm-2 col-form-label">Jenis Matkul</label>
                    <div class="col-sm-8">
                        <select name="type" id="type" class="form-select">
                            <option value="mku">MKU</option>
                            <option value="mkw">MKW</option>
                        </select>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            </form><!-- End Horizontal Form -->
        </div>
    </div>


</x-dashboard-layout>
