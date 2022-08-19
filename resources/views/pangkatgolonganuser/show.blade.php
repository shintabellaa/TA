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
                                Detail Unit {{ $pangkatgolongan->name }}
                            </div>
                        </div>
                    </h5>
                    <div class="card-body">
                        <table class="table table-responsive">
                            <tr>
                                <th>ID</th>
                                <td>:</td>
                                <td>{{ $pangkatgolongan->pangkatgolongan_id }}</td>
                            </tr>
                    </div>
                </div>
            </div>
        </div>
    </div>


