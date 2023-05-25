@extends('layouts.myApp')

@section('content')
@if ($message = Session::get('success'))
      <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>{{ $message }}</strong>
      </div>
    @endif

    @if ($message = Session::get('error'))
      <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
      </div>
    @endif

    @if ($message = Session::get('warning'))
      <div class="alert alert-warning alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
    @endif

    @if ($message = Session::get('info'))
      <div class="alert alert-info alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
      </div>
    @endif

    @if ($errors->any())
      <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button>
        Please check the form below for errors
    </div>
    @endif

<div class="container-fluid">

    {{-- show pegawai --}}
        <div class="fade-in">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <h5>
                            <div class="card-header">
                                <div class="d-flex">
                                     {{ auth()->user()->real_name}}
                                </div>
                            </div>
                        </h5>
                        <div class="card-body">
                            <table class="table table-responsive">
                                <tr>
                                    <th>NIP</th>
                                    <td>:</td>
                                    <td>{{ auth()->user()->nip_nik }}</td>
                                </tr>
                                <tr>
                                    <th>NIDN</th>
                                    <td>:</td>
                                    <td>{{ auth()->user()->nidn}}</td>
                                </tr>
                                <tr>
                                    <th>Nama</th>
                                    <td>:</td>
                                    @if (auth()->user()->title_ahead && auth()->user()->back_title)
                                    <td>{{ auth()->user()->title_ahead}}. {{auth()->user()->real_name }}, {{ auth()->user()->back_title }}  </td>
                                    @elseif (auth()->user()->title_ahead)
                                        <td>{{ auth()->user()->title_ahead}}. {{auth()->user()->real_name }} </td>
                                    @elseif (auth()->user()->back_title)
                                        <td>{{ auth()->user()->real_name }}, {{ auth()->user()->back_title }}  </td>
                                    @else
                                        <td>{{ auth()->user()->real_name }}  </td>
                                    @endif

                                </tr>
                                <tr>
                                    <th>tempat lahir</th>
                                    <td>:</td>
                                    <td>{{auth()->user()->birth_place}}</td>
                                </tr>
                                <tr>
                                    <th>tanggal lahir</th>
                                    <td>:</td>
                                    <td>{{auth()->user()->birth_date}}</td>
                                </tr>
                                <tr>
                                    <th>Jenis Kelamin</th>
                                    <td>:</td>
                                    <td>{{auth()->user()->gender}}</td>
                                </tr>
                                <tr>
                                    <th>Agama</th>
                                    <td>:</td>
                                    <td>{{ auth()->user()->religion}}</td>
                                </tr>
                                <tr>
                                    <th>Berat Badan</th>
                                    <td>:</td>
                                    <td>{{auth()->user()->weight}}</td>
                                </tr>
                                <tr>
                                    <th>Tinggi Badan</th>
                                    <td>:</td>
                                    <td>{{ auth()->user()->height}}</td>
                                </tr>

                                <tr>
                                    <th>Golongan Darah</th>
                                    <td>:</td>
                                    <td>{{ auth()->user()->blood_group}}</td>
                                </tr>
                                <tr>
                                    <th>Kewarganegaraan</th>
                                    <td>:</td>
                                    <td>{{ auth()->user()->citizen_status}}</td>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <td>:</td>
                                    <td>{{ optional($profildiri->address_details->first())->address}}</td>
                                </tr>
                                <tr>
                                    <th>Kabupaten</th>
                                    <td>:</td>
                                    <td>{{ optional($profildiri->address_details->first())->district->regency->regency_name}}</td>
                                </tr>
                                <tr>
                                    <th>Kecamatan</th>
                                    <td>:</td>
                                    <td>{{ optional($profildiri->address_details->first())->district->district_name}}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>:</td>
                                    <td>{{auth()->user()->email}}</td>
                                </tr>
                                <tr>
                                    <th>No Telp</th>
                                    <td>:</td>
                                    <td>{{ auth()->user()->phone_number}}</td>
                                </tr>
                                <tr>
                                    <th>No KTP</th>
                                    <td>:</td>
                                    <td>{{ $profildiri->id_card_number}}</td>
                                </tr>
                                <tr>
                                    <th>No BPJS</th>
                                    <td>:</td>
                                    <td>{{ auth()->user()->bpjs}}</td>
                                </tr>
                                <tr>
                                    <th>Status Perkawinan</th>
                                    <td>:</td>
                                    <td>{{ auth()->user()->marital_status}}</td>
                                </tr>
                                <tr>
                                    <th>Status Pegawai</th>
                                    <td>:</td>
                                    <td>{{ auth()->user()->employee_status}}</td>
                                </tr>
                                <tr>
                                    <th>Foto</th>
                                    <td>:</td>
                                    <td><a target="_blank" href="{{ $profildiri->avatarurl}}">{{ $profildiri->photo}}</a></td>
                                </tr>

                            </table>

                            <a href="{{ route('biodatapegawai.edit', auth()->user()->nip_nik) }}"class="btn btn-warning" id="editButton" data-target="#editPegawai">
                                <i class="cil-pencil">Edit Profil</i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


{{-- education --}}
        <div class="fade-in">
            <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <h5>
                          <div class="card-header">
                              <div class="d-flex">
                                  {{-- rubah href mulai --}}
                                  <a href="{{ route('educationuser.create') }}" class="btn btn-primary">Tambah Riwayat Pendidikan</a>
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
                                  @foreach ($education as $educationdetails)
                                      <tr>
                                          <td class="text-center">{{ $loop->iteration }}</td>
                                          <td class="text-center">{{ $educationdetails->level}}</td>
                                          <td class="text-center">{{ $educationdetails->name}}</td>
                                          <td class="text-center">{{ $educationdetails->graduation_year }}</td>

                                          <td class="text-center">
                                              <a href="{{ route('educationuser.show',$educationdetails->education_details_id) }}"class="btn btn-info" id="editButton" data-target="#editPegawai">
                                                  <i class="cil-zoom-in"></i>
                                              </a>
                                              <a href="{{ route('educationuser.edit',$educationdetails->education_details_id) }}"class="btn btn-warning" id="editButton" data-target="#editPegawai">
                                                  <i class="cil-pencil"></i>
                                              </a>
                                              <form
                                              action="{{ route('educationuser.destroy', $educationdetails->education_details_id) }}"
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


{{-- Training --}}
    <div class="fade-in">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <h5>
                    <div class="card-header">
                        <div class="d-flex">
                            <a href="{{ route('traininguser.create') }}" class="btn btn-primary">Tambah Riwayat Diklat</a>
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
                            @foreach ($training as $trainings)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">{{ $trainings->training_name }}</td>
                                    <td class="text-center">{{ $trainings->year }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('traininguser.show',$trainings->training_id) }}"class="btn btn-info" id="editButton" data-target="#editPegawai">
                                            <i class="cil-zoom-in"></i>
                                        </a>
                                        <a href="{{ route('traininguser.edit',$trainings->training_id) }}"class="btn btn-warning" id="editButton" data-target="#editPegawai">
                                            <i class="cil-pencil"></i>
                                        </a>
                                        <form
                                        action="{{ route('traininguser.destroy', $trainings->training_id) }}"
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
                            <a href="{{ route('strukturaluser.create') }}" class="btn btn-primary">Tambah Riwayat Jabatan Struktural</a>
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
                            @foreach ($struktural_details as $strukturaldetails)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">{{ $strukturaldetails->information}}</td>
                                    <td class="text-center">{{ $strukturaldetails->status}}</td>
                                    <td class="text-center">
                                        <a href="{{ route('strukturaluser.show',$strukturaldetails->structural_id) }}"class="btn btn-info" id="editButton" data-target="#editPegawai">
                                            <i class="cil-zoom-in"></i>
                                        </a>
                                        <a href="{{ route('strukturaluser.edit',$strukturaldetails->structural_id) }}"class="btn btn-warning" id="editButton" data-target="#editPegawai">
                                            <i class="cil-pencil"></i>
                                        </a>

                                        <form
                                        action="{{ route('strukturaluser.destroy', $strukturaldetails->structural_id) }}"
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


{{-- fungsional --}}
    <div class="fade-in">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <h5>
                    <div class="card-header">
                        <div class="d-flex">

                            <a href="{{ route('fungsionaluser.create') }}" class="btn btn-primary">Tambah Fungsional</a>

                        </div>
                    </div>
                </h5>
                <div class="card-body">
                    <table class="table table-responsive-sm table-striped">
                        <thead>

                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Jabatan Fungsional</th>
                                <th class="text-center">Status</th>

                                <th class="text-center">Aksi</th>
                            </tr>

                        </thead>
                        <tbody>
                            @foreach ($fungsional as $fungsionaldetails)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">{{ $fungsionaldetails->information}}</td>
                                    <td class="text-center">{{ $fungsionaldetails->status}}</td>


                                    <td class="text-center">
                                        <a href="{{ route('fungsionaluser.show',$fungsionaldetails->functional_id) }}"class="btn btn-info" id="editButton" data-target="#editPegawai">
                                            <i class="cil-zoom-in"></i>
                                        </a>
                                        <a href="{{ route('fungsionaluser.edit',$fungsionaldetails->functional_id) }}"class="btn btn-warning" id="editButton" data-target="#editPegawai">
                                            <i class="cil-pencil"></i>
                                        </a>
                                        <form
                                        action="{{ route('fungsionaluser.destroy', $fungsionaldetails->functional_id) }}"
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
{{-- end fungsional --}}

{{-- Pangkat Golongan --}}
    <div class="fade-in">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <h5>
                    <div class="card-header">
                        <div class="d-flex">
                            {{-- rubah href mulai --}}
                            <a href="{{ route('pangkatgolonganuser.create') }}" class="btn btn-primary">Tambah Riwayat Pangkat Golongan</a>
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

                                <th class="text-center">Aksi</th>

                            </tr>
                            {{-- rubah selesai --}}
                        </thead>
                        <tbody>
                            @foreach ($rank_group as $pangkatgolongans)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration}}</td>
                                    <td class="text-center">{{ $pangkatgolongans->name  }}</td>
                                    <td class="text-center">{{ $pangkatgolongans->status}}</td>


                                    <td class="text-center">
                                        <a href="{{ route('pangkatgolonganuser.show',$pangkatgolongans->rank_group_id) }}"class="btn btn-info" id="editButton" data-target="#editPegawai">
                                            <i class="cil-zoom-in"></i>
                                        </a>
                                        <a href="{{ route('pangkatgolonganuser.edit',$pangkatgolongans->rank_group_id) }}"class="btn btn-warning" id="editButton" data-target="#editPegawai">
                                            <i class="cil-pencil"></i>
                                        </a>

                                        <form
                                        action="{{ route('pangkatgolonganuser.destroy', $pangkatgolongans->rank_group_id) }}"
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

{{-- Mutasi --}}
<div class="fade-in">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <h5>
                    <div class="card-header">
                        <div class="d-flex">
                            <a href="{{ route('mutasiuser.create')}}" class="btn btn-primary">Tambah Riwayat Mutasi</a>
                         </div>
                    </div>
                </h5>
                <div class="card-body">
                    <table class="table table-responsive-sm table-striped">
                        <thead>
                            {{-- rubah mulai --}}
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Unit Kerja</th>
                                <th class="text-center">Tanggal Mutasi</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                            {{-- rubah selesai --}}
                        </thead>
                        <tbody>
                            @foreach ($mutasi as $employee_transferss)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ $employee_transferss->name }}</td>
                                        <td class="text-center">{{ $employee_transferss->employee_transfer_date}}</td>



                                        <td class="text-center">
                                            <a href="{{ route('mutasiuser.show',$employee_transferss->employee_transfer_id) }}"class="btn btn-info" id="editButton" data-target="#editPegawai">
                                                <i class="cil-zoom-in"></i>
                                            </a>
                                            <a href="{{ route('mutasiuser.edit',$employee_transferss->employee_transfer_id) }}"class="btn btn-warning" id="editButton" data-target="#editPegawai">
                                                <i class="cil-pencil"></i>
                                            </a>
                                            <form
                                            action="{{ route('mutasiuser.destroy',$employee_transferss->employee_transfer_id) }}"
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

{{-- data keluarga pegawai --}}
    <div class="fade-in">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <h5>
                    <div class="card-header">
                        <div class="d-flex">
                            {{-- rubah href mulai --}}
                            <a href="{{ route('biodatakeluargauser.create') }}" class="btn btn-primary">Tambah Biodata Keluarga</a>
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
                            @foreach ($family as $biodatakeluargas)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">{{ $biodatakeluargas->name}}</td>
                                    <td class="text-center">{{ $biodatakeluargas->relationship }}</td>

                                    <td class="text-center">
                                        <a href="{{ route('biodatakeluargauser.show',$biodatakeluargas->id_number) }}"class="btn btn-info" id="editButton" data-target="#editPegawai">
                                            <i class="cil-zoom-in"></i>
                                        </a>
                                        <a href="{{ route('biodatakeluargauser.edit',$biodatakeluargas->id_number) }}"class="btn btn-warning" id="editButton" data-target="#editPegawai">
                                            <i class="cil-pencil"></i>
                                        </a>
                                        <form
                                        action="{{ route('biodatakeluargauser.destroy', $biodatakeluargas->id_number) }}"
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
