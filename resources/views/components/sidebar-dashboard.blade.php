<ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav-data" data-bs-toggle="collapse" href="#">
            <i class="bi bi-journal-text"></i><span>Data Master</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav-data" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="{{ route('dosens.index') }}">
                    <i class="bi bi-circle"></i><span>Data Dosen</span>
                </a>
            </li>
            <li>
                <a href="{{ route('mahasiswa.index') }}">
                    <i class="bi bi-circle"></i><span>Data Mahasiswa</span>
                </a>
            </li>
            <li>
                <a href="{{ route('prodi.index') }}">
                    <i class="bi bi-circle"></i><span>Program Studi</span>
                </a>
            </li>
            <li>
                <a href="{{ route('major.index') }}">
                    <i class="bi bi-circle"></i><span>Jurusan</span>
                </a>
            </li>
            <li>
                <a href="{{ route('matkuls.index') }}">
                    <i class="bi bi-circle"></i><span>Mata Kuliah</span>
                </a>
            </li>
        </ul>
    </li><!-- End Dosen Forms Nav -->

    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav-student" data-bs-toggle="collapse" href="#">
            <i class="bi bi-journal-text"></i><span>Report Mahasiswa</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav-student" class="nav-content collapse " data-bs-parent="#sidebar-nav">

            <li>
                <a href="}">
                    <i class="bi bi-circle"></i><span>KRS</span>
                </a>
            </li>
            <li>
                <a href="}">
                    <i class="bi bi-circle"></i><span>KHS</span>
                </a>
            </li>
            <li>
                <a href="}">
                    <i class="bi bi-circle"></i><span>NIlai Mahasiswa</span>
                </a>
            </li>

        </ul>
    </li>
    <!-- End Student Forms Nav -->
</ul>
