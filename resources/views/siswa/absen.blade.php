@extends('template_backend.home')
@section('heading', 'Absen Harian Siswa')
@section('page')
    <li class="breadcrumb-item active">Absen Harian Siswa</li>
@endsection
@section('content')
    @php
        $no = 1;
    @endphp
    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Absen Harian Siswa</h3>
            </div>
            <form action="{{ route('absen.siswa-simpan') }}" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="no_induk">Nomor Induk</label>
                        <input type="text" id="no_induk" name="no_induk" maxlength="6"
                            onkeypress="return inputAngka(event)"
                            class="form-control @error('no_induk') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label for="kehadiran">Keterangan Kehadiran</label>
                        <select id="kehadiran" type="text"
                            class="form-control @error('kehadiran') is-invalid @enderror select2bs4" name="kehadiran_id">
                            <option value="">-- Pilih Keterangan Kehadiran --</option>
                            @foreach ($kehadiran as $data)
                                <option value="{{ $data->id }}">{{ $data->ket }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="card-footer">
                    <button name="submit" class="btn btn-primary"><i class="nav-icon fas fa-save"></i> &nbsp;
                        Absen</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $("#AbsenSiswa").addClass("active");
    </script>
@endsection
