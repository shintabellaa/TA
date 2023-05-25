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
                                {{ $strukturaldetails->structural->information }}
                            </div>
                        </div>
                    </h5>
                    <div class="card-body">  
                        <table class="table table-responsive">

                            <tr>
                                <th>Jabatan Struktural</th>
                                <td>:</td>
                                <td>{{ $strukturaldetails->structural->information  }}</td>
                            </tr>
                            <tr>
                                <th>TMT</th>
                                <td>:</td>
                                <td>{{ $strukturaldetails->tmt  }}</td>
                            </tr>
                            <tr>
                                <th>Ditandatangani oleh</th>
                                <td>:</td>
                                <td>{{ $strukturaldetails->sign_by  }}</td>
                            </tr>
                            <tr>
                                <th>Nomor SK</th>
                                <td>:</td>
                                <td>{{ $strukturaldetails->sk_no  }}</td>
                            </tr>
                            <tr>
                                <th>Tanggal SK</th>
                                <td>:</td>
                                <td>{{ $strukturaldetails->sk_date  }}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>:</td>
                                <td>{{ $strukturaldetails->status  }}</td>
                            </tr>
                            <tr>
                                <th>File SK</th>
                                <td>:</td>
                                <td><a href="http://127.0.0.1:8000/storage/<?php echo $strukturaldetails->sk_file; ?>" target="_blank">{{ $strukturaldetails->sk_file}}</a></td>


                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
