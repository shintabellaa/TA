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
                                {{ $fungsionaldetails->functional->information }}
                            </div>
                        </div>
                    </h5>
                    <div class="card-body">
                        <table class="table table-responsive">
                           <tr>
                                <th>NIP/NIK</th>
                                <td>:</td>
                                <td>{{ $fungsionaldetails->nip_nik }}</td>
                            </tr>
                            <tr>
                                <th>TMT</th>
                                <td>:</td>
                                <td>{{ $fungsionaldetails->tmt}}</td>
                            </tr>
                            <tr>
                                <th>Diputuskan Oleh</th>
                                <td>:</td>
                                <td>{{ $fungsionaldetails->sign_by}}</td>
                            </tr>
                            <tr>
                                <th>No SK</th>
                                <td>:</td>
                                <td>{{ $fungsionaldetails->sk_no }}</td>
                            </tr>
                            <tr>
                                <th>Tanggal SK</th>
                                <td>:</td>
                                <td>{{ $fungsionaldetails->sk_date}}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>:</td>
                                <td>{{ $fungsionaldetails->status }}</td>
                            </tr>
                            <tr>
                                <th>File SK</th>
                                <td>:</td>
                                <td><a href="http://127.0.0.1:8000/storage/<?php echo $fungsionaldetails->sk_file; ?>" target="_blank">{{ $fungsionaldetails->sk_file}}</a></td>


                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
