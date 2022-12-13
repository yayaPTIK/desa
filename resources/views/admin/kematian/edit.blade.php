@extends('layouts.apps')
@section('content')
    <div class="card col-md-12 m-auto">
        <div class="card-head mt-3 ml-2">
            <h3>Laporan Kematian</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('kematians.update', $data->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    {{-- <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" class="form-control" name="namaPelapor" placeholder="Nama Pelapor" required>
                        </div>
                        <div class="form-group">
                            <label for="">Pekerjaan</label>
                            <input type="text" class="form-control" name="pekerjaanPelapor" placeholder="Pekerjaan Pelapor" required>
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input type="text" class="form-control" name="alamatPelapor" placeholder="Dusun, RT/RW Desa" required>
                        </div>
                        <div class="form-group">
                            <label for="">Agama</label>
                            <input type="text" class="form-control" name="agamaPelapor" placeholder="Agama Pelapor" required>
                        </div>
                        <div class="form-group">
                            <label for="">NIK</label>
                            <input type="text" class="form-control" name="nikPelapor" placeholder="NIK Pelapor" required>
                        </div>
                        <div class="form-group">
                            <label for="">Hubungan Keluarga</label>
                            <input type="text" class="form-control" name="ikatan" placeholder="Sodara/Anak/Ibu/Ayah Dari yang meninggal" required>
                        </div>
                    </div> --}}
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Nama Yang Meninggal</label>
                            <input type="text" class="form-control" name="namaMeninggal" placeholder="Nama Yang Meninggal" required value="{{$data->nama2}}">
                        </div>
                        {{-- <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                                <option value="">-- Pilih Jenis Kelamin --</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div> --}}
                        <div class="form-group">
                            <label for="">Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempat" placeholder="Tempat Lahir Pelapor" required value="{{$data->tempat}}">
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tanggal" placeholder="Tanggal Lahir" required value="{{$data->tanggal}}">
                        </div>
                        <div class="form-group">
                            <label for="">Agama</label>
                            <input type="text" class="form-control" name="agamaMeninggal" placeholder="Agama" required value="{{$data->agama2}}">
                        </div>
                        <div class="form-group">
                            <label for="">Nama Ayah</label>
                            <input type="text" class="form-control" name="namaAyah" placeholder="Nama Ayah" required value="{{$data->nama_ayah}}">
                        </div>
                        <div class="form-group">
                            <label for="">Nama Ibu</label>
                            <input type="text" class="form-control" name="namaIbu" placeholder="Nama Ibu" required value="{{$data->nama_ibu}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12"><h5 class="text-center">Keterangan Lainnya</h5></div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Alamat Sesuai KTP</label>
                            <input type="text" class="form-control" name="alamatMeninggal" placeholder="Alamat Sesuai KTP" required value="{{$data->alamat_ktp}}">
                        </div>
                        <div class="form-group">
                            <label for="">Hari</label>
                            <input type="text" class="form-control" name="hariMeninggal" placeholder="Hari Meninggal" required value="{{$data->Hari}}">
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Meninggal</label>
                            <input type="date" class="form-control" name="tanggalMeninggal" placeholder="Tanggal Meninggal" required value="{{$data->tanggal_meninggal}}">
                        </div>
                        <div class="form-group">
                            <label for="">Tempat Meninggal</label>
                            <input type="text" class="form-control" name="tempatMeninggal" placeholder="Tempat Meninggal" required value="{{$data->tempat_meninggal}}">
                        </div>
                        <div class="form-group">
                            <label for="">Setujui Pengaduan / Laporan ? </label>
                            <select name="status" id="status" class="form-control" required>
                                <option value="1">Ya</option>
                                <option value="0">Tidak</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary w-100">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
