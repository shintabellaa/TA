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
                                <a href="{{ route('struktural.index') }}" class="btn btn-primary">Tambah Struktural</a>
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
                                    <th class="text-center">Jabatan Struktural</th>
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
                                @foreach ($strukturals as $struktural)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ $struktural->information}}</td>
                                        <td class="text-center">{{ $struktural->tmt}}</td>
                                        <td class="text-center">{{ $struktural->sk_no}}</td>
                                        <td class="text-center">{{ $struktural->status}}</td>
                                        <td class="text-center">{{ $struktural->sign_by}}</td>
                                        <td class="text-center">{{ $struktural->sk_file}}</td>

                                           <th class="text-center">File SK</th>
                                        <td class="text-center">
                                            <a href=""class="btn btn-warning" id="editButton" data-target="#editPegawai">
                                                <i class="cil-pencil"></i>
                                            </a>
                                            <form
                                            action=" "
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
