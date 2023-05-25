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
                                {{ $strukturaldetail->structural_id }}
                            </div>
                        </div>
                    </h5>
                    <div class="card-body">
                        <table class="table table-responsive">
                            <tr>
                                <th>Jabatan Struktural</th>
                                <td>:</td>
                                <td>{{ $strukturaldetail->structural->information  }}</td>
                            </tr>
                            <tr>
                                <th>TMT</th>
                                <td>:</td>
                                <td>{{ $strukturaldetail->tmt  }}</td>
                            </tr>
                            <tr>
                                <th>Ditandatangani oleh</th>
                                <td>:</td>
                                <td>{{ $strukturaldetail->sign_by  }}</td>
                            </tr>
                            <tr>
                                <th>Nomor SK</th>
                                <td>:</td>
                                <td>{{ $strukturaldetail->sk_no  }}</td>
                            </tr>
                            <tr>
                                <th>Tanggal SK</th>
                                <td>:</td>
                                <td>{{ $strukturaldetail->sk_date  }}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>:</td>
                                <td>{{ $strukturaldetail->status  }}</td>
                            </tr>
                            <tr>
                                <th>File SK</th>
                                <td>:</td>
                                <td><a href="http://127.0.0.1:8000/storage/<?php echo $strukturaldetail->sk_file; ?>" target="_blank">{{ $strukturaldetail->sk_file}}</a></td>
                            </tr>



                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
