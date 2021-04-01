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
                                <a href="" class="btn btn-primary">Tambah Pangkat Golongan</a>
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
                                    <th class="text-center">Pangkat Golongan</th>
                                    <th class="text-center">TMT</th>
                                    <th class="text-center">No SK</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">File</th>
                                    <th class="text-center">Aksi</th>

                                </tr>
                                {{-- rubah selesai --}}
                            </thead>
                            <tbody>
                                @foreach ($pangkatgolongan as $data)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration}}</td>
                                        <td class="text-center">{{ $data->name}}</td>
                                        <td class="text-center">{{ $data->tmt}}</td>
                                        <td class="text-center">{{ $data->sk_no}}</td>
                                        <td class="text-center">{{ $data->status}}</td>
                                        <td class="text-center">{{ $data->sk_file}}</td>

                                        <td class="text-center">
                                            <a href=""class="btn btn-warning" id="editButton" data-target="#editpangkatgolongan">
                                                <i class="cil-pencil"></i>
                                            </a>
                                            <form
                                            action=""
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
