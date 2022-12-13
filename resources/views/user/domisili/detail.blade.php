@extends('layouts.apps')
@section('style')
@endsection
@section('content')
    <div class="card">
        <div class="card-head m-3">
            <div class="row">
                <div class="col-md-6">
                    <h3>Surat Keterangan Tidak Mampu</h3>
                </div>
                <div class="col-md-6 d-flex justify-content-end ">
                    <button title="Print" class="btn btn-info" onclick="printDiv('show')">
                        <em class="la la-print"></em>
                    </button>
                    <script type="text/javascript">
                        function printDiv(show) {
                            var printContents = document.getElementById(show).innerHTML;
                            var originalContents = document.body.innerHTML;
                            document.body.innerHTML = "<html><head><title></title></head><body>" + printContents + "</body>";
                            window.print();
                            document.body.innerHTML = originalContents;
                        }
                    </script>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="" id="show">
                <header class="col-md-10 m-auto">
                    <div class="row mt-5" style="border-bottom: 3px solid black">

                        <div class="col-md-12 text-center">
                            <h3 class="col-sm-12 fs-12px">
                                PEMERINTAH KABUPATEN KUNINGAN <br />
                                KECAMATAN GARAWANGI <br />
                                DESA KERTAUNGGARAN
                            </h3>
                            <span>Jalan Muhammad Yamin No.14 Kedungarum, Kuningan
                                Telp.(0232)8882858</span>
                        </div>
                    </div>
                </header>
                {{-- Nota Dinas --}}
                <section class="col-md-10 m-auto">
                    <div class="row text-center mt-2">
                        <div class="col-md-8 offset-2">
                            <span><strong><u>SURAT KETERANGAN DOMISILI <br> </u></strong></span>
                            <span>Nomor : {{$data->nomor}}</span>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-10 m-auto">
                            <p>Yang bertanda tangan dibawah ini Kepala Desa Kertaunggaran Kabupaten Kuningan menerangkan bahwa :</p>
                            <table class="ml-5" cellpadding="3" cellspacing="3">
                                <tr>
                                    <td>Nama Lengkap</td>
                                    <td> : </td>

                                    <td>{{ $data->nama }}</td>
                                </tr>
                                <tr>
                                    <td>Tempat, Tanggal Lahir</td>
                                    <td> : </td>
                                    
                                    <td>{{ $data->tempat }}, {{$data->tanggal}}</td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td> : </td>

                                    <td>{{ $data->jenis_kelamin }}</td>
                                </tr>
                                <tr>
                                    <td>Pekerjaan</td>
                                    <td> : </td>

                                    <td>{{ $data->pekerjaan }}</td>
                                </tr>
                                <tr>
                                    <td>Agama</td>
                                    <td> : </td>

                                    <td>{{ $data->agama }}</td>
                                </tr>
                                <tr>
                                    <td>Status Perkawinan</td>
                                    <td> : </td>

                                    <td>{{ $data->status_kawin }}</td>
                                </tr>
                                <tr>
                                    <td>Warga Negara</td>
                                    <td> : </td>

                                    <td>{{ $data->negara }}</td>
                                </tr>
                            </table>
                            <p class="mt-3">
                                Orang tersebut diatas, adalah benar-benar warga kami dan berdomisili di Desa Kertaunggaran Kecamatan Garawangi Kabupaten Kuningan. Surat keterangan ini dibuat sebagai {{$data->keterangan}} 
                            </p>
                            <p class="mt-3">Demikian surat keterangan ini kami buat dengan sebenarnya untuk dipergunakan
                                semestinya.</p>
                        </div>
                    </div>
                </section>
                <section class="mt-5">
                    <div class="col-md-4 ml-auto text-left">
                        Kertaunggaran, {{ $data->created_at->format('d F Y') }} <br>
                        Kepala Desa Kertaunggaran
                        @if ($data->status == 1)
                            <br />
                            <img src="{{asset('uploads/kades/'.$kades->ttd)}}" class="" alt="{{$kades->ttd}}" style="width: 100px">
                            <p class="mb-5 ">
                                {{$kades->nama}}
                            </p>
                        @else
                            <br />
                            <span class="badge badge-danger">Diperoses</span>
                            <p class="mt-5">
                                
                            </p>
                        @endif
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
