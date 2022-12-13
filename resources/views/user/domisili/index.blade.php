@extends('layouts.apps')
@section('style')
    <link rel="stylesheet" href="{{ asset('tables/dataTables.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('alert/sweetalert2.css') }}"> -->
@endsection
@section('content')
    <div class="card">
        <div class="card-head m-3">
            <div class="row">
                <div class="col-md-6">
                    <h3>Data Domisili</h3>
                </div>
                <div class="col-md-6 d-flex justify-content-end ">
                    <a href="{{ route('domisili.create') }}" title="tambah data" class="btn btn-success mr-2">
                        <em class="ft-plus"></em>
                    </a>
                    <a href="{{route('domisili.ajukan')}}" title="Ajukan Domisili Orang lain" class="btn btn-info">
                        Ajukan
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped w-100 table-responsive" id="myTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Agama</th>
                        <th>Pekerjaan</th>
                        <th>Warga Negara</th>
                        <th>status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                ?>
                @foreach ($collection as $item)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->jenis_kelamin}}</td>
                        <td>{{$item->tempat}}</td>
                        <td>{{$item->tanggal}}</td>
                        <td>{{$item->agama}}</td>
                        <td>{{$item->pekerjaan}}</td>
                        <td>{{$item->negara}}</td>
                        <td>
                            @if ($item->status == 1)
                                <button class="btn btn-sm btn-success">ACC</button>
                            @else 
                                <button class="btn btn-sm btn-danger">Belum ACC</button>
                            @endif
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ft-box"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="{{ route('domisili.show', $item->id) }}">Lihat Detail</a>
                                    @if ($item->status == 0)
                                        <a class="dropdown-item" href="{{ route('domisili.edit', $item->id) }}">Edit</a>
                                        <a class="dropdown-item"
                                            onclick="event.preventDefault(); document.getElementById('destroy-form').submit();">Hapus</a>
                                        <form id="destroy-form" action="{{ route('domisili.destroy', $item->id) }}" method="POST"
                                            class="d-none">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    @endif
                                </div>
                            </div>
                        </td>
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
