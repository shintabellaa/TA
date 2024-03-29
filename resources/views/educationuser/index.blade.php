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
    <div class="fade-in">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <h5>
                        <div class="card-header">
                            <div class="d-flex">
                                {{-- rubah href mulai --}}
                                {{-- <a href="{{ route('educationdetail.create') }}" class="btn btn-primary">Tambah Riwayat Pendidikan</a> --}}
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
                                <th class="text-center">Bidang</th>
                                <th class="text-center">Tahun Kelulusan</th>
                                <th class="text-center">Negara</th>
                                <th class="text-center">Dekan/Kepala Sekolah</th>
                                <th class="text-center">File Ijazah</th>
                                <th class="text-center">Aksi</th>
                                <th class="text-center"></th>
                                </tr>

                            </thead>
                            <tbody>
                                @foreach ($educationdetail as $educationdetails)
                                    <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">{{ $educationdetails->education->level}}</td>
                                    <td class="text-center">{{ $educationdetails->name}}</td>
                                    <td class="text-center">{{ $educationdetails->major}}</td>
                                    <td class="text-center">{{ $educationdetails->graduation_year }}</td>
                                    <td class="text-center">{{ $educationdetails->country}}</td>
                                    <td class="text-center">{{ $educationdetails->dean_headmaster}}</td>
                                    <td class="text-center">{{ $educationdetails->certificate_file }}</td>

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
</div>
@endsection
