
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
                    <h3>Data Kematian</h3>
                </div>
                <div class="col-md-6 d-flex justify-content-end ">
                    <a href="{{ route('kematians.create') }}" title="tambah data" class="btn btn-info">
                        <em class="ft-plus"></em>
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped w-100 table-responsive-sm" id="myTable">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Tempat, Tanggal Lahir</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($collection as $key => $a)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $a->nama2 }}</td>
                            <td>{{ $a->alamat_ktp }}</td>
                            <td>{{$a->tempat}},{{$a->tanggal}}</td>
                            <td>
                                @if ($a->status == 1)
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
                                        <a class="dropdown-item" href="{{route('kematians.edit', $a->id)}}">Edit</a>
                                        <a class="dropdown-item" href="{{ route('kematians.show', $a->id) }}">Lihat Detail</a>
                                        <a class="dropdown-item"
                                            onclick="event.preventDefault(); document.getElementById('destroy-form').submit();">Hapus</a>
                                        <form id="destroy-form" action="{{ route('kematians.destroy', $a->id) }}" method="POST"
                                            class="d-none">
                                            @csrf
                                            @method('DELETE')
                                        </form>
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
