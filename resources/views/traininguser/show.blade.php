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
                                {{ $trainings->training_name }}
                            </div>
                        </div>
                    </h5>
                    <div class="card-body">
                        <table class="table table-responsive">
                            <tr>
                                <th>Nama Diklat</th>
                                <td>:</td>
                                <td>{{ $trainings->training_name }}</td>
                            </tr>
                            <tr>
                                <th>Jenis Diklat</th>
                                <td>:</td>
                                <td>{{ $trainings->type_of_training}}</td>
                            </tr>
                            <tr>
                                <th>Tempat</th>
                                <td>:</td>
                                <td>{{ $trainings->place }}</td>
                            </tr>
                            <tr>
                                <th>Tahun</th>
                                <td>:</td>
                                <td>{{ $trainings->year }}</td>
                            </tr>
                            <tr>
                                <th>Sertifikat</th>
                                <td>:</td>
                                <td><a href="http://127.0.0.1:8000/storage/<?php echo  $trainings->certificate_file; ?>" target="_blank">{{  $trainings->certificate_file}}</a></td>


                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
