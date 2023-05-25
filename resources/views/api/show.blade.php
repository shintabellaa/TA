@extends('layouts.myApp')

@section('content')
<div class="container-fluid">
    <div class="fade-in">
            <div class="col-lg-12">
                <div class="card">
                    <h5>
                        <div class="card-header">
                            <div class="d-flex">
                                {{ $api->name}}
                            </div>
                        </div>
                    </h5>
                    <div class="card-body">
                        <table class="table table-responsive">

                            <tr>
                                <th>Token</th>
                                <td>:</td>
                                <td>{{ $api->token}}</td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection
