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
                              
                            </div>
                        </div>
                    </h5>
                    <div class="card-body">
                        <table class="table table-responsive-sm table-striped">
                            <thead>

                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Jabatan Struktural</th>
                                    <th class="text-center">TMT</th>
                                    <th class="text-center">No SK</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Diputuskan Oleh</th>
                                    <th class="text-center">File SK</th>
                                    <th class="text-center">Aksi</th>
                                </tr>

                            </thead>
                            <tbody>
                                @foreach ($strukturaldetail as $strukturaldetails)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ $strukturaldetails->structural->information}}</td>
                                        <td class="text-center">{{ $strukturaldetails->tmt}}</td>
                                        <td class="text-center">{{ $strukturaldetails->sk_no}}</td>
                                        <td class="text-center">{{ $strukturaldetails->status}}</td>
                                        <td class="text-center">{{ $strukturaldetails->sign_by}}</td>
                                        <td class="text-center">File SK</td>

                                        <td class="text-center">
                                            <a href="{{ route('strukturaldetail.show',$strukturaldetails->structural_id) }}"class="btn btn-info" id="editButton" data-target="#editPegawai">
                                                <i class="cil-zoom-in"></i>
                                            </a>
                                            <a href="{{ route('strukturaldetail.edit',$strukturaldetails->structural_id) }}"class="btn btn-warning" id="editButton" data-target="#editPegawai">
                                                <i class="cil-pencil"></i>
                                            </a>

                                            <form
                                            action="{{ route('strukturaldetail.destroy', $strukturaldetails->structural_id) }}"
                                            method="post" onclick="return confirm('Anda yakin menghapus data ?')"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-youtube">
                                                <i class="cil-trash"></i>
                                            </button>
                                        </form>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
