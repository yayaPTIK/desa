@extends('layouts.apps')
@section('style')
    <link rel="stylesheet" href="{{ asset('tables/dataTables.css') }}">
     <link rel="stylesheet" href="{{ asset('alert/sweetalert2.css') }}">
@endsection
@section('content')
    <div class="card">
        <div class="card-head m-3">
            <div class="row">
                <div class="col-md-6">
                    <h3>Data Anggota Kartu Keluarga</h3>
                </div>
                <div class="col-md-6 d-flex justify-content-end ">
                    <a href="{{ route('kartu.create') }}" title="tambah data" class="btn btn-info">
                        <em class="ft-plus"></em>
                    </a>
                    
                </div>
                <div class="col-md-12 text-center">
                     <h3>Nomor : {{$data->nomor}}</h3>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped w-100 table-responsive-sm" id="myTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>NIK</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Agama</th>
                        <th>Pekerjaan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                ?>
                @foreach ($collection as $item)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->nik}}</td>
                        <td>{{$item->jenis_kelamin}}</td>
                        <td>{{$item->tempat_lahir}}</td>
                        <td>{{$item->tanggal_lahir}}</td>
                        <td>{{$item->agama}}</td>
                        <td>{{$item->pekerjaan}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@section('script')
    <script src="{{ asset('tables/dataTables.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
    <script src="{{ asset('alert/sweetalert2.js') }}"></script>
    @if (session('success'))
        <script>
            swal({
                title: "Good job!",
                text: "{{ session('success') }}",
                icon: "success",
                button: "OK",
            });
        </script>
    @endif
@endsection
@endsection
