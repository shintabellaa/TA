@extends('layouts.myApp')

@section('content')

<form action="{{route('biodata.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-8">
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3">
                        <label for="inputnip_nik" class="col-sm-2 col-form-label">nip_nik</label>
                    </div>
                    <div class="col-lg-9">
                        <input type="nip_nik" class="form-control" id="inputnip_nik" placeholder="nip_nik"
                            name="nip_nik">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3">
                        <label for="inputnidn" class="col-sm-2 col-form-label">NIDN</label>
                    </div>
                    <div class="col-lg-9">
                        <input type="nidn" class="form-control" id="nidn" placeholder="NIDN" name="nidn">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3">
                        <label for="inputnip_nik" class="col-sm-2 col-form-label">Nama</label>
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-3">
                                <input type="text" class="form-control" id="inputnip_nik" placeholder="gelar depan"
                                    name="gelardepan">
                            </div>
                            <div class="col-lg-5">
                                <input type="text" class="form-control" id="inputnip_nik" placeholder="nama"
                                    name="nama">
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="inputnip_nik" placeholder="gelar belakang"
                                    name="gelarbelakang">

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
                        <label for="inputnip_nik" class="col-sm-2 col-form-label">Agama</label>
                    </div>
                    <div class="col-lg-9">
                        <select class="form-control" id="inputagama" placeholder="Agama" name="agama">
                            <option>--Agama--</option>
                            <option value="islam">Islam</option>
                            <option value="hindu">Hindu</option>
                            <option value="buddha">Buddha</option>
                            <option value="kristen">Kristen</option>
                            <option>Lainnya</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3">
                        <label for="inputstatusperkawinan" class="col-sm-2 col-form-label">Status Perkawinan</label>
                    </div>
                    <div class="col-lg-9">
                        <select class="form-control" id="inputnip_nik" placeholder="Status Perkawinan"
                            name="statusperkawinan">
                            <option>--Status Perkawinan--</option>
                            <option value="belumkawin">Belum Kawin</option>
                            <option value="kawin">Kawin</option>
                            <option value="janda">Cerai Hidup</option>
                            <option value="ceraimati">Cerai Mati</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3">
                        <label for="inputstatuskewarganegaraan" class="col-sm-2 col-form-label">Kewarganegaraan</label>
                    </div>
                    <div class="col-lg-9">
                        <select class="form-control" id="inputstatuskewarganegaraan"
                            placeholder="Status kewarganegaraan" name="statuskewarganegaraan">
                            <option>--Kewarganegaraan--</option>
                            <option value="indonesia">Indonesia</option>
                            <option>Lainnya</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3">
                        <label for="inputnip_nik" class="col-sm-2 col-form-label">Golongan Darah</label>
                    </div>
                    <div class="col-lg-9">
                        <select class="form-control" id="inputgolongandarah" placeholder="Golongan Darah"
                            name="golongandarah">
                            <option>--Golongan Darah--</option>
                            <option value="a">A</option>
                            <option value="b">B</option>
                            <option value="o">O</option>
                            <option value="ab">AB</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3">
                        <label for="inputnip_nik" class="col-sm-2 col-form-label">Tinggi Badan</label>
                    </div>
                    <div class="col-lg-9">
                        <input type="nip_nik" class="form-control" id="inputnip_nik" placeholder="Tinggi Badan"
                            name="tinggibadan">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3">
                        <label for="inputberatbadan" class="col-sm-2 col-form-label">Berat Badan</label>
                    </div>
                    <div class="col-lg-9">
                        <input type="nip_nik" class="form-control" id="inputnip_nik" placeholder="Berat Badan"
                            name="beratbadan">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3">
                        <label for="inputnidn" class="col-sm-2 col-form-label">Email</label>
                    </div>
                    <div class="col-lg-9">
                        <input type="nidn" class="form-control" id="nidn" placeholder="email" name="email">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3">
                        <label for="inputnip_nik" class="col-sm-2 col-form-label">No Telepon</label>
                    </div>
                    <div class="col-lg-9">
                        <input type="nip_nik" class="form-control" id="notelepon" placeholder="No telepon"
                            name="notelepon">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3">
                        <label for="inputnip_nik" class="col-sm-2 col-form-label">No. KTP</label>
                    </div>
                    <div class="col-lg-9">
                        <input type="nip_nik" class="form-control" id="inputnip_nik" placeholder="No KTP" name="noktp">
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
                        <label for="inputnip_nik" class="col-sm-2 col-form-label">No. BPJS</label>
                    </div>
                    <div class="col-lg-9">
                        <input type="nip_nik" class="form-control" id="inputnip_nik" placeholder="No BPJS"
                            name="nobpjs">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3">
                        <label for="inputnip_nik" class="col-sm-2 col-form-label">Alamat</label>
                    </div>
                    <div class="col-lg-9">
                        <input type="nip_nik" class="form-control" id="inputnip_nik" placeholder="alamat" name="alamat">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3">
                        <label for="inputnip_nik" class="col-sm-2 col-form-label">Kabupaten/Kota</label>
                    </div>
                    <div class="col-lg-9">
                        <select class="form-control kabupaten_kota" id="inputgolongandarah" placeholder="Kabupaten"
                            name="kabupaten_kota">
                            <option>--Kabupaten/Kota--</option>
                            @foreach($regencies as $data_regencies)
                            <option value="{{ $data_regencies->regency_id }}">{{ $data_regencies->regency_name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3">
                        <label for="inputnip_nik" class="col-sm-2 col-form-label">Kecamatan</label>
                    </div>
                    <div class="col-lg-9">
                        <select class="form-control kecamatan" id="kecamatan" placeholder="Kecamatan" name="kecamatan">
                            <option>--Kecamatan--</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3">
                        <label for="inputnip_nik" class="col-sm-2 col-form-label">Cacat</label>
                    </div>
                    <div class="col-lg-9">
                        <input type="nip_nik" class="form-control" id="inputnip_nik" placeholder="Cacat" name="cacat">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3">
                        <label for="inputnip_nik" class="col-sm-2 col-form-label">Batas Usia Pensiun</label>
                    </div>
                    <div class="col-lg-9">
                        <input type="nip_nik" class="form-control" id="bataspensiun" placeholder="bataspenisun"
                            name="bataspensiun">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3">
                        <label for="inputnip_nik" class="col-sm-2 col-form-label">Status Pegawai</label>
                    </div>
                    <div class="col-lg-9">
                        <input type="nip_nik" class="form-control" id="statuspegawai" placeholder="statuspegawai"
                            name="statuspegawai">
                    </div>
                </div>
            </div>
        </div>
            <div class="col-md-4 text-center">
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
            </div>

    </div>
    </div>
    <div>
        <button type="submit" class="btn btn-primary"><span class="cil-save btn-icon mr-2"></span>Simpan</button>
    </div>
</form>
@endsection
