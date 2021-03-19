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
                                <a href="" class="btn btn-primary">Tambah data pegawai</a>
                            </div>
                        </div>
                    </h5>
                    <div class="card-body">
                        <table class="table table-responsive-sm table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">NIP/NIK</th>
                                    <th class="text-center">Unit Kerja</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($biodatapribadi as $data)
                                <tr>
                                    <th class="text-center" scope="row">{{$loop->iteration}}.</th>
                                    <td class="text-center">{{$data->real_name}}</td>
                                    <td class="text-center">{{$data->nip_nik}}</td>
                                    <td class="text-center"></td>
                                    <td class="text-center">
                                        <a href="{{route('edit.biodata', $data->nip_nik)}}"class="btn btn-warning" id="editButton" data-target="#editPegawai">
                                            <i class="cil-pencil"></i>
                                        </a>
                                        <form
                                            action="{{ route('delete.biodata', $data->nip_nik) }}"
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

<!-- Modal Edit  -->

{{-- <div class="modal fade" id="editPegawai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Program Studi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
           <div class="modal-body">
                <form action="#" method="POST">
                    @csrf
                    @method('PATCH')
                    <input type="hidden" class="form-control-file" id="edit_id" name="id_department">
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Nama</label>
                        <input type="text" class="form-control-file" id="edit_name" name="department_name">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">NIP/NIK</label>
                        <input type="text" class="form-control-file" id="edit_accreditation" name="accreditation">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Unit Kerja</label>
                        <input type="text" class="form-control-file" id="edit_sk_num" name="sk_num">
                    </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div> --}}
            </form>
        </div>
    </div>
</div>

@section('javascript')
{{-- <script>
    $(document).ready(function () {
        $(document).on("click", "#editButton", function () {
            var id_department = $(this).data("id_department");
            var department_name = $(this).data("department_name");
            var accreditation = $(this).data("accreditation");
            var sk_num = $(this).data("sk_num");
            $("#edit_id").val(id_department);
            $("#edit_name").val(department_name);
            $("#edit_accreditation").val(accreditation);
            $("#edit_sk_num").val(sk_num);
            console.log(id_department);
        })
    })
</script> --}}
