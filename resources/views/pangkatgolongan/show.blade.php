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
                                {{ $pangkatgolongan->rank_group_id }}
                            </div>
                        </div>
                    </h5>
                    <div class="card-body">
                        <table class="table table-responsive">

                            <tr>
                                <th>Nama</th>
                                <td>:</td>
                                <td>{{ $pangkatgolongan->name}}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>:</td>
                                <td>{{ $pangkatgolongan->status}}</td>
                            </tr>
                            

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
