@extends('layouts.myApp')

@section('content')

<form action="{{route('biodata.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-8">
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3">
                        <label for="inputid_number" class="col-sm-2 col-form-label">ID Number</label>
                    </div>
                    <div class="col-lg-9">
                        <input type="id_number" class="form-control" id="inputid_number" placeholder="id_number"
                            name="id_number">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3">
                        <label for="inputnip/nik" class="col-sm-2 col-form-label">NIP/NIK</label>
                    </div>
                    <div class="col-lg-9">
                        <input type="nip/nik" class="form-control" id="nip/nik" placeholder="nip/nik" name="nip/nik">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3">
                        <label for="inputname" class="col-sm-2 col-form-label">Nama</label>
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-3">
                                <input type="text" class="form-control" id="inputname" placeholder="nama"
                                    name="nama">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3">
                        <label for="inputnip_nik" class="col-sm-2 col-form-label">Tempat, Tanggal Lahir</label>
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-3">
                                <input type="text" class="form-control" id="inputnip_nik" placeholder="tempat"
                                    name="tempatlahir">
                            </div>
                            <div class="col-lg-5">
                                <input type="date" format="yyyy-mm-dd" class="form-control" id="inputnip_nik"
                                    placeholder="tanggal lahir" name="tanggallahir">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <label for="inputnip_nik" class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jeniskelamin" id="inlineRadio1" value="laki-laki">
                <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jeniskelamin" id="inlineRadio2" value="perempuan">
                <label class="form-check-label" for="inlineRadio2">Perempuan</label>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3">
                        <label for="inputnip_nik" class="col-sm-2 col-form-label">Hubungan dengan Pegawai</label>
                    </div>
                    <div class="col-lg-9">
                        <select class="form-control" id="inputstatus" placeholder="status" name="status">
                            <option>--Hubungan dengan Pegawai--</option>
                            <option value="suami">suami</option>
                            <option value="istri">istri</option>
                            <option value="anak">anak</option>
                            <option>Lainnya</option>
                        </select>
                    </div>
                </div>
            </div>


            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3">
                        <label for="inputnip_nik" class="col-sm-2 col-form-label">No. NPWP</label>
                    </div>
                    <div class="col-lg-9">
                        <input type="nip_nik" class="form-control" id="inputnip_nik" placeholder="No npwp"
                            name="nonpwp">
                    </div>
                </div>
            </div>



            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3">
                        <label for="inputstatus" class="col-sm-2 col-form-label">Status</label>
                    </div>
                    <div class="col-lg-9">
                        <select class="form-control" id="inputstatus" placeholder="Status"
                            name="status">
                            <option>--Status--</option>
                            <option value="a">Masih Hidup</option>
                            <option value="b">Meninggal Dunia</option>
                        </select>
                    </div>
                </div>
            </div>



            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3">
                        <label for="inputnip_nik" class="col-sm-2 col-form-label">Status</label>
                    </div>
                    <div class="col-lg-9">
                        <input type="nip_nik" class="form-control" id="statuspegawai" placeholder="statuspegawai"
                            name="statuspegawai">
                    </div>
                </div>
            </div>
        </div>
            {{-- <div class="col-md-4 text-center">
                <img id="blah" src="#" width="150px" height="150px" class="avatar">
                <div class="btn btn-default btn-sm">
                    <i class="fa fa-upload"></i>
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-secondary"
                        onclick="document.getElementById('btnuploadfile').click();"><span
                            class="cil-cloud-upload btn-icon"></span> Upload</button>
                </div>
                <input type="file" class="form-control-file" id="btnuploadfile" style="display: none"
                    name="upload_gambar">
            </div> --}}

    </div>
    </div>
    <div>
        <button type="submit" class="btn btn-primary"><span class="cil-save btn-icon mr-2"></span>Simpan</button>
    </div>
</form>
@endsection
