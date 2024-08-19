<!-- partial:partials/_sidebar.html -->
<nav class="sidebar">
    <div class="sidebar-header">
        <div class="row">
            <div class="col-3 text-center">
                <img
                    src="{{ asset('images/LogoPerusahaan.png') }}"
                    style="width: 100%; height: 100%"
                    alt=""
                />
            </div>
            <div class="col-7">
                <a href="#" class="sidebar-brand"> JASA BANTU </a>
            </div>
            <div class="col-2 text-center mt-3">
                <div class="sidebar-toggler not-active">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <!-- Awalnya IA -->
            @if(Session('role') == 'Admin Pengaduan')
                <li class="nav-item">
                    <a href="{{ url('dashboard-ia') }}" class="nav-link">
                        <i class="link-icon" data-feather="box"></i>
                        <span class="link-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('daftaraduan-ia') }}" class="nav-link">
                        <i class="link-icon" data-feather="file"></i>
                        <span class="link-title">Daftar Pengaduan</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('daftarinformasi-ia') }}" class="nav-link">
                        <i class="link-icon" data-feather="file"></i>
                        <span class="link-title">Daftar Pengaduan Terverifikasi</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link"
                        data-bs-toggle="collapse"
                        href="#advancedUI"
                        role="button"
                        aria-expanded="false"
                        aria-controls="advancedUI"
                    >
                        <i class="link-icon" data-feather="folder"></i>
                        <span class="link-title">Daftar Tindak Lanjut</span>
                        <i class="link-arrow" data-feather="chevron-down"></i>
                    </a>
                    <div class="collapse" id="advancedUI">
                        <ul class="nav sub-menu">
                            <li class="nav-item">
                                <a href="{{url('daftarstatusdiskusi-ia')}}" class="nav-link"
                                    >Diskusi</a
                                >
                            </li>
                            <li class="nav-item">
                                <a
                                    href="{{url('daftarstatusinvestigasi-ia')}}"
                                    class="nav-link"
                                    >Investigasi</a
                                >
                            </li>
                            <li class="nav-item">
                                <a
                                    href="{{url('daftarstatusverifikasi-ia')}}"
                                    class="nav-link"
                                    >Verifikasi</a
                                >
                            </li>
                            <!-- <li class="nav-item">
                                <a
                                    href="{{url('daftarstatusaudit-ia')}}"
                                    class="nav-link"
                                    >Audit</a
                                >
                            </li> -->
                            <li class="nav-item">
                                <a
                                    href="{{url('daftarstatusdiabaikan-ia')}}"
                                    class="nav-link"
                                    >Diabaikan</a
                                >
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="{{ url('history') }}" class="nav-link">
                        <i class="link-icon" data-feather="file"></i>
                        <span class="link-title">History</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('daftaruser') }}" class="nav-link">
                        <i class="link-icon" data-feather="file"></i>
                        <span class="link-title">Daftar Akses User</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('daftar-hasil-rekomendasi')}}" class="nav-link">
                        <i class="link-icon" data-feather="archive"></i>
                        <span class="link-title">Daftar Hasil Tindak Lanjut</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link"
                        data-bs-toggle="collapse"
                        href="#forms"
                        role="button"
                        aria-expanded="false"
                        aria-controls="forms"
                    >
                        <i class="link-icon" data-feather="database"></i>
                        <span class="link-title">Data Master</span>
                        <i class="link-arrow" data-feather="chevron-down"></i>
                    </a>
                    <div class="collapse" id="forms">
                        <ul class="nav sub-menu">
                            <li class="nav-item">
                                <a href="{{ url('dataunit') }}" class="nav-link">Daftar Unit</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('datasubunit') }}" class="nav-link">Daftar Subunit</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('datajenis') }}" class="nav-link">Daftar Jenis</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('dataasal') }}" class="nav-link">Daftar Asal</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- Awalnya ypta -->
            @elseif(Session('role') == 'Pimpinan Lembaga')
                <li class="nav-item">
                    <a href="{{ url('dashboard-pimpinan') }}" class="nav-link">
                        <i class="link-icon" data-feather="box"></i>
                        <span class="link-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('daftarpengaduan-pimpinan') }}" class="nav-link">
                        <i class="link-icon" data-feather="file"></i>
                        <span class="link-title">Daftar Pengaduan</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('daftarinformasi-pimpinan') }}" class="nav-link">
                        <i class="link-icon" data-feather="file"></i>
                        <span class="link-title">Daftar Pengaduan Terverifikasi</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('daftarpengaduanSpam-pimpinan') }}" class="nav-link">
                        <i class="link-icon" data-feather="file"></i>
                        <span class="link-title">Daftar Pengaduan Spam</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('history') }}" class="nav-link">
                        <i class="link-icon" data-feather="file"></i>
                        <span class="link-title">History</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link"
                        data-bs-toggle="collapse"
                        href="#advancedUI"
                        role="button"
                        aria-expanded="false"
                        aria-controls="advancedUI"
                    >
                        <i class="link-icon" data-feather="folder"></i>
                        <span class="link-title">Daftar Tindak Lanjut</span>
                        <i class="link-arrow" data-feather="chevron-down"></i>
                    </a>
                    <div class="collapse" id="advancedUI">
                        <ul class="nav sub-menu">
                            <li class="nav-item">
                                <a href="{{url('daftarstatusdiskusi-pimpinan')}}" class="nav-link"
                                    >Diskusi</a
                                >
                            </li>
                            <li class="nav-item">
                                <a
                                    href="{{url('daftarstatusinvestigasi-pimpinan')}}"
                                    class="nav-link"
                                    >Investigasi</a
                                >
                            </li>
                            <li class="nav-item">
                                <a
                                    href="{{url('daftarstatusverifikasi-pimpinan')}}"
                                    class="nav-link"
                                    >Verifikasi</a
                                >
                            </li>
                            <!-- <li class="nav-item">
                                <a
                                    href="{{url('daftarstatusaudit-ypta')}}"
                                    class="nav-link"
                                    >Audit</a
                                >
                            </li> -->
                            <li class="nav-item">
                                <a
                                    href="{{url('daftarstatusdiabaikan-pimpinan')}}"
                                    class="nav-link"
                                    >Diabaikan</a
                                >
                            </li>
                        </ul>
                    </div>
                </li>
            @else
                <li class="nav-item">
                    <a href="{{ url('dashboard') }}" class="nav-link">
                        <i class="link-icon" data-feather="file"></i>
                        <span class="link-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('daftarTestimoni') }}" class="nav-link">
                        <i class="link-icon" data-feather="file"></i>
                        <span class="link-title">Testimoni</span>
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a
                        class="nav-link"
                        data-bs-toggle="collapse"
                        href="#listpesan"
                        role="button"
                        aria-expanded="false"
                        aria-controls="listpesan"
                    >
                        <i class="link-icon" data-feather="file"></i>
                        <span class="link-title">Daftar Pesan Masuk</span>
                        <i class="link-arrow" data-feather="chevron-down"></i>
                    </a>
                    <div class="collapse" id="listpesan">
                        <ul class="nav sub-menu">
                            <li class="nav-item">
                                <a href="/message-ypta" class="nav-link">Pesan YPTA</a>
                            </li>
                            <li class="nav-item">
                                <a href="/messageIA" class="nav-link">Pesan IA</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link"
                        data-bs-toggle="collapse"
                        href="#daftarinformasi"
                        role="button"
                        aria-expanded="false"
                        aria-controls="advancedUI"
                    >
                        <i class="link-icon" data-feather="file"></i>
                        <span class="link-title">Daftar Informasi</span>
                        <i class="link-arrow" data-feather="chevron-down"></i>
                    </a>
                    <div class="collapse" id="daftarinformasi">
                        <ul class="nav sub-menu">
                            <li class="nav-item">
                                <a href="/daftarpengaduan-ypta" class="nav-link">Informasi YPTA</a>
                            </li>
                            <li class="nav-item">
                                <a href="/daftarpengaduan" class="nav-link">Informasi IA</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link"
                        data-bs-toggle="collapse"
                        href="#daftarpengaduan"
                        role="button"
                        aria-expanded="false"
                        aria-controls="advancedUI"
                    >
                        <i class="link-icon" data-feather="file"></i>
                        <span class="link-title">Daftar Pengaduan</span>
                        <i class="link-arrow" data-feather="chevron-down"></i>
                    </a>
                    <div class="collapse" id="daftarpengaduan">
                        <ul class="nav sub-menu">
                            <li class="nav-item">
                                <a href="/daftarAduan-ypta" class="nav-link">Pengaduan YPTA</a>
                            </li>
                            <li class="nav-item">
                                <a href="/daftarAduan" class="nav-link">Pengaduan IA</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link"
                        data-bs-toggle="collapse"
                        href="#advancedUI"
                        role="button"
                        aria-expanded="false"
                        aria-controls="advancedUI"
                    >
                        <i class="link-icon" data-feather="folder"></i>
                        <span class="link-title">Daftar Tindak Lanjut</span>
                        <i class="link-arrow" data-feather="chevron-down"></i>
                    </a>
                    <div class="collapse" id="advancedUI">
                        <ul class="nav sub-menu">
                            <li class="nav-item">
                                <a href="/daftarStatusDiskusi-ypta" class="nav-link"
                                    >Diskusi</a
                                >
                            </li>
                            <li class="nav-item">
                                <a
                                    href="/daftarStatusInvestigasi-ypta"
                                    class="nav-link"
                                    >Investigasi</a
                                >
                            </li>
                            <li class="nav-item">
                                <a
                                    href="/daftarStatusVerifikasi-ypta"
                                    class="nav-link"
                                    >Verifikasi</a
                                >
                            </li>
                            <li class="nav-item">
                                <a
                                    href="/daftarPengaduanAudit-ypta"
                                    class="nav-link"
                                    >Audit</a
                                >
                            </li>
                            <li class="nav-item">
                                <a
                                    href="/daftarStatusDiabaikan-ypta"
                                    class="nav-link"
                                    >Diabaikan</a
                                >
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link"
                        data-bs-toggle="collapse"
                        href="#daftarhistory"
                        role="button"
                        aria-expanded="false"
                        aria-controls="advancedUI"
                    >
                        <i class="link-icon" data-feather="file"></i>
                        <span class="link-title">History</span>
                        <i class="link-arrow" data-feather="chevron-down"></i>
                    </a>
                    <div class="collapse" id="daftarhistory">
                        <ul class="nav sub-menu">
                            <li class="nav-item">
                                <a href="/history-ypta" class="nav-link">Riwayat YPTA</a>
                            </li>
                            <li class="nav-item">
                                <a href="/history" class="nav-link">Riwayat IA</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="{{ url('daftaruser') }}" class="nav-link">
                        <i class="link-icon" data-feather="file"></i>
                        <span class="link-title">Daftar Akses User</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/daftarHasilRekomendasi" class="nav-link">
                        <i class="link-icon" data-feather="archive"></i>
                        <span class="link-title">Daftar Hasil Tindak Lanjut</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link"
                        data-bs-toggle="collapse"
                        href="#forms"
                        role="button"
                        aria-expanded="false"
                        aria-controls="forms"
                    >
                        <i class="link-icon" data-feather="database"></i>
                        <span class="link-title">Data Master</span>
                        <i class="link-arrow" data-feather="chevron-down"></i>
                    </a>
                    <div class="collapse" id="forms">
                        <ul class="nav sub-menu">
                            <li class="nav-item">
                                <a href="/masterDataUnit" class="nav-link">Daftar Unit</a>
                            </li>
                            <li class="nav-item">
                                <a href="/masterDataJenis" class="nav-link">Daftar Jenis</a>
                            </li>
                            <li class="nav-item">
                                <a href="/masterDataAsal" class="nav-link">Daftar Asal</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="/setting" class="nav-link">
                        <i class="link-icon" data-feather="settings"></i>
                        <span class="link-title">Setting</span>
                    </a>
                </li> -->
            @endif
        </ul>
    </div>
</nav>
