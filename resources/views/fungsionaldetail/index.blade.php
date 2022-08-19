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
                                {{-- rubah href mulai --}}
                                {{-- <a href="{{ route('fungsionaldetail.create') }}" class="btn btn-primary">Tambah Fungsional</a> --}}
                                {{-- rubah href seleai --}}
                            </div>
                        </div>
                    </h5>
                    <div class="card-body">
                        <table class="table table-responsive-sm table-striped">
                            <thead>
                                {{-- rubah mulai --}}
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Jabatan Fungsional</th>
                                    <th class="text-center">TMT</th>
                                    <th class="text-center">No SK</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Diputuskan Oleh</th>
                                    <th class="text-center">File SK</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                                {{-- rubah selesai --}}
                            </thead>
                            <tbody>
                                @foreach ($fungsionaldetail as $fungsionaldetails)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ $fungsionaldetails->fungsional->information}}</td>
                                        <td class="text-center">{{ $fungsionaldetails->tmt}}</td>
                                        <td class="text-center">{{ $fungsionaldetails->sk_no}}</td>
                                        <td class="text-center">{{ $fungsionaldetails->status}}</td>
                                        <td class="text-center">{{ $fungsionaldetails->sign_by}}</td>
                                        <td class="text-center">{{ $fungsionaldetails->sk_file}}</td>

                                        <td class="text-center">
                                            <a href="{{ route('fungsionaluser.show',$fungsionaldetails->functional_id) }}"class="btn btn-warning" id="editButton" data-target="#editPegawai">
                                                <i class="cil-zoom-in"></i>
                                            </a>

                                            <a href="{{ route('fungsionaldetail.edit',$fungsionaldetails->functional_id) }}"class="btn btn-warning" id="editButton" data-target="#editPegawai">
                                                <i class="cil-pencil"></i>
                                            </a>

                                            <form
                                            action="{{ route('fungsionaldetail.destroy', $fungsionaldetails->functional_id) }}"
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