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
                                {{ $employee_transfer->work_unit->name }}
                            </div>
                        </div>
                    </h5>
                    <div class="card-body">
                        <table class="table table-responsive">

                            <tr>
                                <th>Tanggal Mutasi</th>
                                <td>:</td>
                                <td>{{ $employee_transfer->employee_transfer_date}}</td>
                            </tr>
                            <tr>
                                <th>Diputuskan Oleh</th>
                                <td>:</td>
                                <td>{{ $employee_transfer->sign_by}}</td>
                            </tr>
                            <tr>
                                <th>No SK</th>
                                <td>:</td>
                                <td>{{ $employee_transfer->sk_no }}</td>
                            </tr>
                            <tr>
                                <th>File SK</th>
                                <td>:</td>
                                <td><a href="http://127.0.0.1:8000/storage/<?php echo $employee_transfer->sk_file; ?>" target="_blank">{{ $employee_transfer->sk_file}}</a></td>

                            </tr>



                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
