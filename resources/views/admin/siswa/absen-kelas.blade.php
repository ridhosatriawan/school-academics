@extends('template_backend.home')
@section('heading', 'Absensi ' . $kelas->nama_kelas)
@section('page')
    <li class="breadcrumb-item active"><a href="{{ route('siswa.absensi') }}">Absensi Siswa</a></li>
    <li class="breadcrumb-item active">Detail Absensi Per Kelas</li>
@endsection
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('siswa.absensi') }}" class="btn btn-default btn-sm"><i
                        class="nav-icon fas fa-arrow-left"></i>
                    &nbsp; Kembali</a>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Detail Siswa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($siswa as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->nama_siswa }}</td>
                                <td>
                                    <a href="{{ route('siswa.kehadiran', Crypt::encrypt($data->id)) }}"
                                        class="btn btn-info btn-sm"><i class="nav-icon fas fa-search-plus"></i> &nbsp;
                                        Ditails</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $("#AbsensiSiswa").addClass("active");
    </script>
@endsection
