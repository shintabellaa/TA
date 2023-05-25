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
                                <a href="{{ route('biodatapegawai.create') }}" class="btn btn-primary">Tambah data pegawai</a>
                            </div>
                        </div>
                    </h5>
                    <div class="card-body">
                        <table class="table table-responsive-sm table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Unit Kerja</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($biodatapegawai as $data)
                                <tr>
                                    <th class="text-center" scope="row">{{$loop->iteration}}.</th>
                                    <td class="text-center">{{$data->real_name}} <br>{{$data->nip_nik}} </td>
                                    <td class="text-center">{{ $data->employee_transfer_last() ? $data->employee_transfer_last()->work_unit->name : "" }}</td>

                                    <td class="text-center">

                                        <a href="{{ route('biodatapegawai.show',$data->nip_nik) }}"class="btn btn-info" id="editButton" data-target="#editPegawai">
                                            <i class="cil-zoom-in"></i>
                                        </a>
                                        <a href="{{ route('biodatapegawai.edit', $data->nip_nik) }}"class="btn btn-warning" id="editButton" data-target="#editPegawai">
                                            <i class="cil-pencil"></i>
                                        </a>

                                        <form
                                            action="{{ URL::route('biodatapegawai.destroy', $data->nip_nik) }}"
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

            </form>
        </div>
    </div>
</div>

@section('javascript')
