@extends('layouts.myApp')

@section('content')
<div class="container-fluid">
    <div class="fade-in">
            <div class="col-lg-12">
                <div class="card">
                    <h5>
                        <div class="card-header">
                            <div class="d-flex">
                                {{ $educationdetail->education_id}}
                            </div>
                        </div>
                    </h5>
                    <div class="card-body">
                        <table class="table table-responsive">

                            <tr>
                                <th>Tingkat</th>
                                <td>:</td>
                                <td>{{ $educationdetail->education->level}}</td>
                            </tr>
                            <tr>
                                <th>Nama Sekolah</th>
                                <td>:</td>
                                <td>{{ $educationdetail->name}}</td>
                            </tr>
                            <tr>
                                <th>Bidang</th>
                                <td>:</td>
                                <td>{{ $educationdetail->major}}</td>
                            </tr>
                            <tr>
                                <th>  Tahun Kelulusan</th>
                                <td>:</td>
                                <td>{{ $educationdetail->graduation_year}}</td>
                            </tr>
                            <tr>
                                <th> Negara</th>
                                <td>:</td>
                                <td>{{ $educationdetail->country}}</td>
                            </tr>
                            <tr>
                                <th> Dekan/Kepala Sekolah</th>
                                <td>:</td>
                                <td>{{ $educationdetail->dean_headmaster}}</td>
                            </tr>
                            <tr>
                                <th> File Ijazah</th>
                                <td>:</td>
                                <td><a href="http://127.0.0.1:8000/storage/<?php echo $educationdetail->certificate_file; ?>" target="_blank">{{ $educationdetail->certificate_file}}</a></td>


                            </tr>
 
                        </table>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection
