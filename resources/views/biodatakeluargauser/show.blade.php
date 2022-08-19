@extends('layouts.myApp')

@section('content')
<div class="container-fluid">
    <div class="fade-in">
            <div class="col-lg-12">
                <div class="card">
                    <h5>
                        <div class="card-header">
                            <div class="d-flex">
                                {{ $biodatakeluarga->id_number}}
                            </div>
                        </div>
                    </h5>
                    <div class="card-body">
                        <table class="table table-responsive">

                            <tr>
                                <th>Nama</th>
                                <td>:</td>
                                <td>{{ $biodatakeluarga->name}}</td>
                            </tr>
                            <tr>
                                <th>Hubungan dengan pegawai</th>
                                <td>:</td>
                                <td>{{ $biodatakeluarga->relationship}}</td>
                            </tr>
                            <tr>
                                <th>No HP</th>
                                <td>:</td>
                                <td>{{ $biodatakeluarga->phone_no}}</td>
                            </tr>
                            <tr>
                                <th>Tempat Lahir</th>
                                <td>:</td>
                                <td>{{ $biodatakeluarga->birth_place}}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Lahir</th>
                                <td>:</td>
                                <td>{{ $biodatakeluarga->birth_date}}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>:</td>
                                <td>{{ $biodatakeluarga->status}}</td>
                            </tr>
                            <tr>
                                <th>Pekerjaan</th>
                                <td>:</td>
                                <td>{{ $biodatakeluarga->occupation}}</td>
                            </tr>
                            <tr>
                                <th>Pendidikan Terakhir</th>
                                <td>:</td>
                                <td>{{ $biodatakeluarga->last_education}}</td>
                            </tr>
                            <tr>
                                <th>NPWP</th>
                                <td>:</td>
                                <td>{{ $biodatakeluarga->npwp_no}}</td>
                            </tr>



                        </table>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection
