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
                                <a href="{{ route('traininguser.create') }}" class="btn btn-primary">Tambah Diklat</a>
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
                                    <th class="text-center">NIP/NIK</th>
                                    <th class="text-center">Nama Diklat</th>
                                    <th class="text-center">Jenis Diklat</th>
                                    <th class="text-center">Tempat</th>
                                    <th class="text-center">Tahun</th>
                                    <th class="text-center">Sertifikat</th>
                                    <th class="text-center">Aksi</th>
                                    <th class="text-center"></th>
                                </tr>
                                {{-- rubah selesai --}}
                            </thead>
                            <tbody>
                                @foreach ($trainings as $training)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ $training->nip_nik }}</td>
                                        <td class="text-center">{{ $training->training_name }}</td>
                                        <td class="text-center">{{ $training->type_of_training }}</td>
                                        <td class="text-center">{{ $training->place }}</td>
                                        <td class="text-center">{{ $training->year }}</td>
                                        <td class="text-center">{{ $training->file_certificate }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('traininguser.show',$training->training_id) }}"class="btn btn-info" id="editButton" data-target="#editPegawai">
                                                <i class="cil-zoom-in"></i>
                                            </a>
                                            <a href="{{ route('traininguser.edit',$training->training_id) }}"class="btn btn-warning" id="editButton" data-target="#editPegawai">
                                                <i class="cil-pencil"></i>
                                            </a>
                                            <form
                                            action="{{ route('traininguser.destroy', $training->training_id) }}"
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
