
@extends('layouts.myApp')

@section('content')
<div class="container-fluid">
    <div class="fade-in">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <h5>

                        <div class="card-header">
                            <div class="d-flex">
                                {{ $biodatapegawai->real_name}}
                            </div>
                        </div>
                    </h5>
                    <div class="card-body">
                        <table class="table table-responsive">
                            <tr>
                                <th>NIP</th>
                                <td>:{{ $biodatapegawai->nip_nik }}</td>
                            </tr>
                            <tr>
                                <th>NIDN</th>
                                <td>:{{ $biodatapegawai->nidn}}</td>
                            </tr>
                            <tr>
                                <th>Nama</th>
                                <td>: {{ $biodatapegawai->title_ahead}}</td>
                            </tr>
                            <tr>
                                <th>tempat lahir</th>
                                <td>: {{ $biodatapegawai->birth_place}}</td>

                            </tr>
                            <tr>
                                <th>tanggal lahir</th>
                                <td>:    {{ $biodatapegawai->birth_date}}</td>

                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <td>:  {{ $biodatapegawai->gender}}</td>
                            </tr>
                            <tr>
                                <th>Agama</th>
                                <td>: {{ $biodatapegawai->religion}}</td>
                            </tr>
                            <tr>
                                <th>Berat Badan</th>
                                <td>:  {{ $biodatapegawai->weight}}</td>
                            </tr>
                            <tr>
                                <th>Tinggi Badan</th>
                                <td>: {{ $biodatapegawai->height}}</td>
                            </tr>
                            <tr>
                                <th>Golongan Darah</th>
                                <td>:  {{ $biodatapegawai->blood_group}}</td>
                            </tr>
                            <tr>
                                <th>Kewarganegaraan</th>
                                <td>:{{ $biodatapegawai->citizen_status}}</td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>: {{ $address->address }}</td>
                            </tr>
                            <tr>
                                <th>Kabupaten</th>
                                <td>:{{ $regency->regency_name}}</td>
                            </tr>
                            <tr>
                                <th>Kecamatan</th>
                                <td>:  {{ $district->district_name}}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>: {{ $biodatapegawai->email}}</td>
                             </tr>
                            <tr>
                                <th>No Telp</th>
                                <td>:   {{ $address->phone_number }}</td>
                            </tr>
                            <tr>
                                <th>No KTP</th>
                                <td>:  {{ $biodatapegawai->id_card_number}}</td>
                             </tr>
                            <tr>
                                <th>No BPJS</th>
                                <td>:  {{ $biodatapegawai->bpjs}}</td>
                            </tr>
                            <tr>
                                <th>Status Perkawinan</th>
                                <td>:     {{ $biodatapegawai->marital_status}}</td>
                            </tr>
                            <tr>
                                <th>Status Pegawai</th>
                                <td>:    {{ $biodatapegawai->employee_status}}</td>
                            </tr>
                            <tr>
                                <th>Foto</th>
                                <td>:  {{ $biodatapegawai->photo}}</td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
