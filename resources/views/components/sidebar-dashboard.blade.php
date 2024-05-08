<ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
        <a class="nav-link collapsed " href="/admin" >
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
        </a>
    </li><!-- End Dashboard Nav -->


    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav-dosen" data-bs-toggle="collapse" href="#">
            <i class="bi bi-journal-text"></i><span>Dosen</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav-dosen" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="{{ route('dosens.index') }}">
                    <i class="bi bi-circle"></i><span>Data Dosen</span>
                </a>
            </li>
            <li>
                <a href="/admin/contact">
                    <i class="bi bi-circle"></i><span>Contact</span>
                </a>
            </li>
            <li>
                <a href="{{ route('matkuls.index') }}">
                    <i class="bi bi-circle"></i><span>Matkul</span>
                </a>
            </li>
            <li>
                <a href="/admin/about">
                    <i class="bi bi-circle"></i><span>About</span>
                </a>
            </li>
        </ul>
    </li><!-- End Dosen Forms Nav -->

    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav-student" data-bs-toggle="collapse" href="#">
            <i class="bi bi-journal-text"></i><span>Mahasiswa</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav-student" class="nav-content collapse " data-bs-parent="#sidebar-nav">

            <li>
                <a href="{{ route('mahasiswas.index') }}">
                    <i class="bi bi-circle"></i><span>Data Mahasiswa</span>
                </a>
            </li>

        </ul>
    </li><!-- End Student Forms Nav -->
