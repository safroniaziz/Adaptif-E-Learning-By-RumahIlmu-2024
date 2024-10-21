<li class="{{ set_active('dashboard') }}">
    <a href="{{ route('dashboard') }}">
        <i class="fa fa-television"></i>
        <span>Dashboard</span>
    </a>
</li>

<li class="header">DATA MASTER</li>
<li class="treeview {{ set_active(['jenisKuisioner','jenisKuisioner.edit','bankKuisioner','bankKuisioner.edit']) }}">
    <a href="#">
        <i class="fa fa-quote-left"></i> <span>Evaluasi Pembelajaran</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu " style="padding-left:25px;">
        <li class="{{ set_active(['jenisKuisioner','jenisKuisioner.edit']) }}"><a href="{{ route('jenisKuisioner') }}"><i class="fa fa-circle-o"></i>&nbsp;Jenis Kuisioner</a></li>
        <li class="{{ set_active(['bankKuisioner','bankKuisioner.edit']) }}"><a href="{{ route('bankKuisioner') }}"><i class="fa fa-circle-o"></i>&nbsp;Bank Kuisioner</a></li>
    </ul>
</li>

<li class="{{ set_active(['bankCapaianLulusan','bankCapaianLulusan.edit']) }}">
    <a href="{{ route('bankCapaianLulusan') }}">
        <i class="fa fa-briefcase"></i>
        <span>Bank Capaian Lulusan</span>
    </a>
</li>

<li class="treeview {{ set_active(['rubrikPenilaian','indikatorPenilaian','penilaianKelompok','soalKuis','soalKuis.detail','soalKuis.jawaban']) }}">
    <a href="#">
        <i class="fa fa-question-circle"></i> <span>Bank Soal & Penilaian</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu " style="padding-left:25px;">
        <li class="{{ set_active(['soalKuis','soalKuis.detail','soalKuis.jawaban']) }}"><a href="{{ route('soalKuis') }}"><i class="fa fa-circle-o"></i>&nbsp;Soal Kuis</a></li>
        <li class="{{ set_active(['rubrikPenilaian']) }}"><a href="{{ route('rubrikPenilaian') }}"><i class="fa fa-circle-o"></i>&nbsp;Rubrik Penilaian</a></li>
        <li class="{{ set_active(['indikatorPenilaian']) }}"><a href="{{ route('indikatorPenilaian') }}"><i class="fa fa-circle-o"></i>&nbsp;Indikator Penilaian</a></li>
        <li class="{{ set_active(['penilaianKelompok']) }}"><a href="{{ route('penilaianKelompok') }}"><i class="fa fa-circle-o"></i>&nbsp;Penilaian Kelompok</a></li>
    </ul>
</li>

<li class="header">MENU UTAMA</li>
{{-- @if(auth()->user()->hasRole('participant') || auth()->user()->hasRole('presenter') || auth()->user()->hasRole('administrator')) --}}

{{-- @endif --}}
<li class="{{ set_active([
        'kelas',
        'kelas.detail',
        'kelas.topikPembahasan',
        'kelas.mahasiswa',
        'kelas.mahasiswa.aktivitas',
        'kelas.mahasiswa.riwayatBelajar',
        'kelas.capaianLulusan',
        'kelas.kuisioner',
        'kelas.kuisionerKelompok',
        'kelas.create',
        'kelas.topikPembahasan.subCpmk',
        'kelas.topikPembahasan.materi',
        'kelas.topikPembahasan.materi.detail',
        'kelas.topikPembahasan.materi.tugasKelompok',
        'kelas.topikPembahasan.materi.kuis',
        'kelas.topikPembahasan.materi.soalKuis',
    ]) }}">
    <a href="{{ route('kelas') }}">
        <i class="fa fa-book"></i>
        <span>Manajemen Kelas</span>
    </a>
</li>

<!-- Authentication -->
<li>
    <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
        <i class="fa fa-sign-out text-danger"></i>
        <span>{{__('Logout') }}</span>
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</li>
