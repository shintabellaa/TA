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
                                {{ $fungsionaldetail->functional_id }}
                            </div>
                        </div>
                    </h5>
                    <div class="card-body">
                        <table class="table table-responsive">
                           <tr>
                                <th>NIP/NIK</th>
                                <td>:</td>
                                <td>{{ $fungsionaldetail->nip_nik }}</td>
                            </tr>
                            <tr>
                                <th>TMT</th>
                                <td>:</td>
                                <td>{{ $fungsionaldetail->tmt}}</td>
                            </tr>
                            <tr>
                                <th>Diputuskan Oleh</th>
                                <td>:</td>
                                <td>{{ $fungsionaldetail->sign_by}}</td>
                            </tr>
                            <tr>
                                <th>No SK</th>
                                <td>:</td>
                                <td>{{ $fungsionaldetail->sk_no }}</td>
                            </tr>
                            <tr>
                                <th>Tanggal SK</th>
                                <td>:</td>
                                <td>{{ $fungsionaldetail->sk_date}}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>:</td>
                                <td>{{ $fungsionaldetail->status }}</td>
                            </tr>
                            <tr>
                                <th>File SK</th>
                                <td>:</td>
                                <td>{{ $fungsionaldetail->sk_file}}</td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
