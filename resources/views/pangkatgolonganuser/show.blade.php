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
                                {{$pangkatgolongan->rank_group_id }}
                            </div>
                        </div>
                    </h5>
                    <div class="card-body">
                        <table class="table table-responsive">
                           <tr>
                                <th>Nama</th>
                                <td>:</td>
                                <td>{{$pangkatgolongan->name }}</td>
                            </tr>
                            <tr>
                                <th>TMT</th>
                                <td>:</td>
                                <td>{{$pangkatgolongan->tmt}}</td>
                            </tr>
                            <tr>
                                <th>Diputuskan Oleh</th>
                                <td>:</td>
                                <td>{{$pangkatgolongan->sign_by}}</td>
                            </tr>
                            <tr>
                                <th>No SK</th>
                                <td>:</td>
                                <td>{{$pangkatgolongan->sk_no }}</td>
                            </tr>
                            <tr>
                                <th>Tanggal SK</th>
                                <td>:</td>
                                <td>{{$pangkatgolongan->sk_date}}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>:</td>
                                <td>{{$pangkatgolongan->status }}</td>
                            </tr>
                            <tr>
                                <th>File SK</th>
                                <td>:</td>
                                <td>{{ $pangkatgolongan->sk_file}}</td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
