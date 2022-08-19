
@extends('layouts.myApp')

@section('content')
<div class="container-fluid">

{{-- show pegawai --}}
    <div class="fade-in">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <h5>
                        <div class="card-header">
                            <div class="d-flex">
                                 {{ $biodatapegawai->real_name}}
                            </div>
                        </div>
                    </h5>
                    <div class="card-body">
                        <table class="table table-responsive">
                            <tr>
                                <th>NIP</th>
                                <td>:</td>
                                <td>{{ $biodatapegawai->nip_nik }}</td>
                            </tr>
                            <tr>
                                <th>NIDN</th>
                                <td>:</td>
                                <td>{{ $biodatapegawai->nidn}}</td>
                            </tr>
                            <tr>
                                <th>Nama</th>
                                <td>:</td>
                                <td>{{ $biodatapegawai->title_ahead}}. {{$biodatapegawai->real_name }}, {{ $biodatapegawai->back_title }}  </td>
                            </tr>
                            <tr>
                                <th>tempat lahir</th>
                                <td>:</td>
                                <td>{{ $biodatapegawai->birth_place}}</td>
                            </tr>
                            <tr>
                                <th>tanggal lahir</th>
                                <td>:</td>
                                <td>{{ $biodatapegawai->birth_date}}</td>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <td>:</td>
                                <td>{{ $biodatapegawai->gender}}</td>
                            </tr>
                            <tr>
                                <th>Agama</th>
                                <td>:</td>
                                <td>{{ $biodatapegawai->religion}}</td>
                            </tr>
                            <tr>
                                <th>Berat Badan</th>
                                <td>:</td>
                                <td>{{ $biodatapegawai->weight}}</td>
                            </tr>
                            <tr>
                                <th>Tinggi Badan</th>
                                <td>:</td>
                                <td>{{ $biodatapegawai->height}}</td>
                            </tr>

                            <tr>
                                <th>Golongan Darah</th>
                                <td>:</td>
                                <td>{{ $biodatapegawai->blood_group}}</td>
                            </tr>
                            <tr>
                                <th>Kewarganegaraan</th>
                                <td>:</td>
                                <td>{{ $biodatapegawai->citizen_status}}</td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>:</td>
                                <td>{{ $address->address}}</td>
                            </tr>
                            <tr>
                                <th>Kabupaten</th>
                                <td>:</td>
                                <td>{{ $regency->regency_name}}</td>
                            </tr>
                            <tr>
                                <th>Kecamatan</th>
                                <td>:</td>
                                <td>{{ $district->district_name}}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>:</td>
                                <td>{{ $biodatapegawai->email}}</td>
                            </tr>
                            <tr>
                                <th>No Telp</th>
                                <td>:</td>
                                <td>{{ $biodatapegawai->phone_number}}</td>
                            </tr>
                            {{-- <tr>
                                <th>No KTP</th>
                                <td>:</td>
                                <td>{{ $biodatapegawai->id_card_number}}</td>
                            </tr> --}}
                            <tr>
                                <th>No BPJS</th>
                                <td>:</td>
                                <td>{{ $biodatapegawai->bpjs}}</td>
                            </tr>
                            <tr>
                                <th>Status Perkawinan</th>
                                <td>:</td>
                                <td>{{ $biodatapegawai->marital_status}}</td>
                            </tr>
                            <tr>
                                <th>Status Pegawai</th>
                                <td>:</td>
                                <td>{{ $biodatapegawai->employee_status}}</td>
                            </tr>
                            <tr>
                                <th>Foto</th>
                                <td>:</td>
                                <td><a target="_blank" href="{{ $biodatapegawai->avatarurl}}">{{ $biodatapegawai->photo}}</a></td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- end show pegawai --}}



{{-- education --}}
    <div class="fade-in">
      <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <h5>
                    <div class="card-header">
                        <div class="d-flex">
                            {{-- rubah href mulai --}}
                            <a href="{{ route('educationdetail.create',  ['nip_nik'=> $biodatapegawai->nip_nik]) }}" class="btn btn-primary">Tambah Riwayat Pendidikan</a>
                            {{-- rubah href seleai --}}
                        </div>
                    </div>
                </h5>
                <div class="card-body">
                    <table class="table table-responsive-sm table-striped">
                        <thead>

                            <tr>
                                <th class="text-center">No.</th>
                                <th class="text-center">Tingkat</th>
                                <th class="text-center">Nama Sekolah</th>
                                <th class="text-center">Tahun Kelulusan</th>
                                <th class="text-center">Aksi</th>
                                <th class="text-center"></th>
                            </tr>

                        </thead>
                        <tbody>
                            @foreach ($biodatapegawai->education_details as $educationdetails)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">{{ $educationdetails->education->level}}</td>
                                    <td class="text-center">{{ $educationdetails->name}}</td>
                                    <td class="text-center">{{ $educationdetails->graduation_year }}</td>

                                    <td class="text-center">
                                        <a href="{{ route('educationdetail.show',$educationdetails->education_details_id) }}"class="btn btn-info" id="editButton" data-target="#editPegawai">
                                            <i class="cil-zoom-in"></i>
                                        </a>
                                        <a href="{{ route('educationdetail.edit',$educationdetails->education_details_id) }}"class="btn btn-warning" id="editButton" data-target="#editPegawai">
                                            <i class="cil-pencil"></i>
                                        </a>
                                        <form
                                        action="{{ route('educationdetail.destroy', $educationdetails->education_details_id) }}"
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
{{-- end education --}}



{{-- jabatan fungsional --}}
    <div class="fade-in">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <h5>
                        <div class="card-header">
                            <div class="d-flex">

                                <a href="{{ route('fungsionaldetail.create', ['nip_nik'=> $biodatapegawai->nip_nik]) }}" class="btn btn-primary">Tambah Riwayat Jabatan Fungsional</a>

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
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                                {{-- rubah selesai --}}
                            </thead>
                            <tbody>
                                @foreach ($biodatapegawai->functional_details as $fungsionaldetails)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ $fungsionaldetails->functional->information}}</td>
                                        <td class="text-center">{{ $fungsionaldetails->status}}</td>

                                        <td class="text-center">
                                            <a href="{{ route('fungsionaldetail.show',$fungsionaldetails->functional_id) }}"class="btn btn-info" id="editButton" data-target="#editPegawai">
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
{{-- end jabatan fungsional --}}



{{-- Mutasi --}}
    <div class="fade-in">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <h5>
                        <div class="card-header">
                            <div class="d-flex">
                                {{-- rubah href mulai --}}
                                <a href="{{ route('mutasi.create', ['nip_nik'=> $biodatapegawai->nip_nik]) }}" class="btn btn-primary">Tambah Riwayat Mutasi</a>
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
                                    <th class="text-center">Tanggal Mutasi</th>
                                    <th class="text-center">Unit Kerja</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                                {{-- rubah selesai --}}
                            </thead>
                            <tbody>
                                @foreach ($biodatapegawai->employee_transfer as $employee_transfers)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ $employee_transfers->employee_transfer_date}}</td>
                                        <td class="text-center">{{ $employee_transfers->work_unit->name}}</td>

                                        <td class="text-center">
                                            <a href="{{ route('mutasi.show',$employee_transfers->employee_transfer_id) }}"class="btn btn-info" id="editButton" data-target="#editPegawai">
                                                <i class="cil-zoom-in"></i>
                                            </a>
                                            <a href="{{ route('mutasi.edit',$employee_transfers->employee_transfer_id) }}"class="btn btn-warning" id="editButton" data-target="#editPegawai">
                                                <i class="cil-pencil"></i>
                                            </a>
                                            <form
                                            action="{{ route('mutasi.destroy',$employee_transfers->employee_transfer_id) }}"
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
{{-- end mutasi --}}



{{-- Training --}}
    <div class="fade-in">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <h5>
                        <div class="card-header">
                            <div class="d-flex">
                                <a href="{{ route('training.create', ['nip_nik'=> $biodatapegawai->nip_nik]) }}" class="btn btn-primary">Tambah Riwayat Diklat</a>
                            </div>
                        </div>
                    </h5>
                    <div class="card-body">
                        <table class="table table-responsive-sm table-striped">
                            <thead>

                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama Diklat</th>
                                    <th class="text-center">Tahun</th>
                                    <th class="text-center">Aksi</th>
                                    <th class="text-center"></th>
                                </tr>

                            </thead>
                            <tbody>
                                @foreach ($biodatapegawai->training as $trainings)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ $trainings->training_name }}</td>
                                        <td class="text-center">{{ $trainings->year }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('training.show',$trainings->training_id) }}"class="btn btn-info" id="editButton" data-target="#editPegawai">
                                                <i class="cil-zoom-in"></i>
                                            </a>
                                            <a href="{{ route('training.edit',$trainings->training_id) }}"class="btn btn-warning" id="editButton" data-target="#editPegawai">
                                                <i class="cil-pencil"></i>
                                            </a>
                                            <form
                                            action="{{ route('training.destroy', $trainings->training_id) }}"
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
{{-- end training --}}



{{-- Struktural --}}
    <div class="fade-in">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <h5>
                        <div class="card-header">
                            <div class="d-flex">
                                {{-- rubah href mulai --}}
                                <a href="{{ route('strukturaldetail.create', ['nip_nik'=> $biodatapegawai->nip_nik]) }}" class="btn btn-primary">Tambah Riwayat Jabatan Struktural</a>
                                {{-- rubah href seleai --}}
                            </div>
                        </div>
                    </h5>
                    <div class="card-body">
                        <table class="table table-responsive-sm table-striped">
                            <thead>

                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Jabatan Struktural</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Aksi</th>
                                </tr>

                            </thead>
                            <tbody>
                                @foreach ($biodatapegawai->structural_details as $strukturaldetails)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ $strukturaldetails->structural->information}}</td>
                                        <td class="text-center">{{ $strukturaldetails->status}}</td>
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
{{-- end struktural --}}



{{-- Pangkat Golongan --}}
    <div class="fade-in">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <h5>
                        <div class="card-header">
                            <div class="d-flex">
                                {{-- rubah href mulai --}}
                                <a href="{{ route('pangkatgolongan.create',  ['nip_nik'=> $biodatapegawai->nip_nik]) }}" class="btn btn-primary">Tambah Riwayat Pangkat Golongan</a>
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
                                    <th class="text-center">Status</th>
                                    <th class="text-center">File SK</th>
                                    <th class="text-center">Aksi</th>

                                </tr>
                                {{-- rubah selesai --}}
                            </thead>
                            <tbody>
                                @foreach ($biodatapegawai->rank_group as $pangkatgolongans)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration}}</td>
                                        <td class="text-center">{{ $pangkatgolongans->name  }}</td>
                                        <td class="text-center">{{ $pangkatgolongans->status}}</td>
                                        <td class="text-center">{{ $pangkatgolongans->sk_file}}</td>

                                        <td class="text-center">
                                            <a href="{{ route('pangkatgolongan.show',$pangkatgolongans->rank_group_id) }}"class="btn btn-info" id="editButton" data-target="#editPegawai">
                                                <i class="cil-zoom-in"></i>
                                            </a>
                                            <a href="{{ route('pangkatgolongan.edit',$pangkatgolongans->rank_group_id) }}"class="btn btn-warning" id="editButton" data-target="#editPegawai">
                                                <i class="cil-pencil"></i>
                                            </a>

                                            <form
                                            action="{{ route('pangkatgolongan.destroy', $pangkatgolongans->rank_group_id) }}"
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
{{-- end pangkat golongan --}}




{{-- data keluarga pegawai --}}
<div class="fade-in">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <h5>
                    <div class="card-header">
                        <div class="d-flex">
                            {{-- rubah href mulai --}}
                            <a href="{{ route('biodatakeluarga.create',  ['nip_nik'=> $biodatapegawai->nip_nik]) }}" class="btn btn-primary">Tambah Biodata Keluarga</a>
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
                                <th class="text-center">Aksi</th>
                                <th class="text-center"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($biodatapegawai->family as $biodatakeluargas)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">{{ $biodatakeluargas->name}}</td>
                                    <td class="text-center">{{ $biodatakeluargas->relationship }}</td>

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
{{-- end data keluarga pegawai --}}




</div>
@endsection

