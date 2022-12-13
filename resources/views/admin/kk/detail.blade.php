@extends('layouts.apps')
@section('content')
    <div class="card col-md-12 m-auto">
        <div class="card-head mt-3 ml-2">
            {{-- <h3>Detail Kartu Keluarga</h3> --}}
            <div class="col-md-12 d-flex justify-content-end ">
                <a href="{{route('addkk',$data->id)}}" title="tambah data" class="btn btn-info">
                    <em class="ft-plus"></em>
                </a>
            </div>
            <div class="col-md-12">
                <h1 class="text-center">Kartu Keluarga</h1>
                <h4 class="text-center">No. {{$data->nomor}}</h4>
            </div>            
            <table class="w-100">
                <tr>
                    <td class="text-left">
                        Nama Kepala Keluarga      : {{$data->user_id}} <br>
                        {{-- Nama Kepala Keluarga : @foreach ($dataKepala as $item1)
                        {{$item1->name}}
                        @endforeach <br> --}}
                        RT/RW                : {{$data->rtrw}} <br>
                        Desa                 : {{$data->desa}} 
                    </td>
                    <td class="text-right">
                        Kecamatan            : {{$data->kecamatan}} <br>
                        Kabupaten            : {{$data->kabupaten}} <br>
                        Provinsi             : {{$data->provinsi}}
                    </td>
                </tr>
            </table>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-hover table-responsive">
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>NIK</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Agama</th>
                            <th>Pekerjaan</th>
                            <th>Action</th>
                        </tr>
                        <?php
                            $no = 1;
                        ?>
                        @foreach ($dataUser as $item)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->nik}}</td>
                                <td>{{$item->jenis_kelamin}}</td>
                                <td>{{$item->tempat_lahir}}</td>
                                <td>{{$item->tanggal_lahir}}</td>
                                <td>{{$item->agama}}</td>
                                <td>{{$item->pekerjaan}}</td>
                                <td>
                                    <a class="" onclick="event.preventDefault(); document.getElementById('destroy-form').submit();">Hapus</a>
                                        <form id="destroy-form" action="{{ route('addkk.destroy', $item->id) }}" method="POST" class="d-none">
                                            @csrf
                                          </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>

        <div class="card-footer">
            <div class="row">
                <div class="col-md-12">
                    {{-- <a href="{{route('user.edit', $user->id)}}" class="btn btn-warning" style="width:100%">Edit Semua</a> --}}
                </div>
            </div>
        </div>
    </div>
@endsection