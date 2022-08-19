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
                                <a href="{{ route('biodatakeluarga.create') }}" class="btn btn-primary">Tambah Biodata Keluarga</a>
                                {{-- rubah href seleai --}}
                            </div>
                        </div>
                    </h5>
                    <div class="card-body">
                        <table class="table table-responsive-sm table-striped">
                            <thead>

                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Hubungan dengan pegawai</th>
                                    <th class="text-center">No HP</th>
                                    <th class="text-center">Tempat Lahir</th>
                                    <th class="text-center">Tanggal Lahir</th>
                                    <th class="text-center">Pekerjaan</th>
                                    <th class="text-center">Pendidikan Terakhir</th>
                                    <th class="text-center">NPWP</th>
                                    <th class="text-center">Aksi</th>
                                    <th class="text-center"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($biodatakeluarga as $biodatakeluargas)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ $biodatakeluargas->name}}</td>
                                        <td class="text-center">{{ $biodatakeluargas->relationship }}</td>
                                        <td class="text-center">{{ $biodatakeluargas->phone_no }}</td>
                                        <td class="text-center">{{ $biodatakeluargas->birth_place }}</td>
                                        <td class="text-center">{{ $biodatakeluargas->birth_date }}</td>
                                        <td class="text-center">{{ $biodatakeluargas->occupation }}</td>
                                        <td class="text-center">{{ $biodatakeluargas->last_education }}</td>
                                        <td class="text-center">{{ $biodatakeluargas->npwp_no }}</td>

                                        <td class="text-center">
                                            <a href="{{ route('biodatakeluarga.show',$biodatakeluargas->id_number) }}"class="btn btn-info" id="editButton" data-target="#editPegawai">
                                                <i class="cil-zoom-in"></i>
                                            </a>
                                            <a href="{{ route('biodatakeluarga.edit',$biodatakeluargas->id_number) }}"class="btn btn-warning" id="editButton" data-target="#editPegawai">
                                                <i class="cil-pencil"></i>
                                            </a>
                                            <form
                                            action="{{ route('biodatakeluarga.destroy', $biodatakeluargas->id_number) }}"
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
