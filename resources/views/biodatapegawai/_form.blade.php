<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="role_id" class="col-form-label">Role</label>
        </div>
        <div class="col-lg-9">
            {!! Form::select('roleselect', $role, null,  ['class' => 'form-control']) !!}


        </div>
    </div>
</div>


{{-- form copy mulai --}}
<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="nip_nik" class="col-form-label">NIP/NIK</label>
        </div>
        <div class="col-lg-9">
            {{-- pakai iko taruiuh --}}
            {!! Form::text('nip_nik', null, ['class' => 'form-control', 'placeholder'=>'NIP/NIK']) !!}
        </div>
    </div>
</div>

{{-- form copy akhir --}}
<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="nidn" class="col-form-label">NIDN</label>
        </div>
        <div class="col-lg-9">
            {!! Form::text('nidn', null, ['class' => 'form-control', 'placeholder'=>'NIDN']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="title_ahead" class="col-form-label">Gelar Depan</label>
        </div>
        <div class="col-lg-9">
            {!! Form::text('title_ahead', null, ['class' => 'form-control', 'placeholder'=>'Gelar Depan']) !!}

        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="real_name" class="col-form-label">Nama</label>
        </div>
        <div class="col-lg-9">
            {!! Form::text('real_name', null, ['class' => 'form-control', 'placeholder'=>'Nama']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="back_title" class="col-form-label">Gelar Belakang</label>
        </div>
        <div class="col-lg-9">
            {!! Form::text('back_title', null, ['class' => 'form-control', 'placeholder'=>'Gelar Belakang']) !!}

        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="birth_place" class="col-form-label">Tempat Lahir</label>
        </div>
        <div class="col-lg-9">
            {!! Form::text('birth_place', null, ['class' => 'form-control', 'placeholder'=>'Tempat Lahir']) !!}

        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="birth_date" class="col-form-label">Tanggal Lahir</label>
        </div>
        <div class="col-lg-9">
            {!! Form::date('birth_date', null, ['class' => 'form-control', 'placeholder'=>'Tanggal Lahir']) !!}

        </div>
    </div>
</div>



<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="gender" class="col-form-label">Jenis Kelamin</label>
        </div>
        <div class="col-lg-9">
            {!! Form::radio('gender', 'laki-laki'); !!} Laki Laki
            {!! Form::radio('gender', 'perempuan'); !!} Perempuan
        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="religion" class="col-form-label">Agama</label>
        </div>
        <div class="col-lg-9">
            {!! Form::select ('religion', ['S'=> '--Agama--', 'Islam' => 'Islam', 'Hindu' => 'Hindu', 'Buddha'=>'Buddha', 'Katolik'=>'Katolik', 'Protestan'=>'Protestan','Lainnya'=>'Lainnya'], null,  ['class' => 'form-control']) !!}

        </div>
    </div>
</div>


<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="marital_status" class="col-form-label">Status Perkawinan</label>
        </div>
        <div class="col-lg-9">
             {!! Form::select ('marital_status', ['S'=> '--Status Perkawinan--', 'Belum Kawin' => 'Belum Kawin', 'Kawin' => 'Kawin', 'Cerai Mati'=>'Cerai Mati', 'Cerai Hidup'=>'Cerai Hidup'], null, ['class' => 'form-control']) !!}
            {{-- {!! Form:: file('sk_file',) !!} --}}
        </div>
    </div>
</div>


<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="weight" class="col-form-label">Berat Badan</label>
        </div>
        <div class="col-lg-9">
            {!! Form::text('weight', null, ['class' => 'form-control', 'placeholder'=>'Berat Badan']) !!}

        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="height" class="col-form-label">Tinggi Badan</label>
        </div>
        <div class="col-lg-9">
            {!! Form::text('height', null, ['class' => 'form-control', 'placeholder'=>'Tinggi Badan']) !!}

        </div>
    </div>
</div>


<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="blood_group" class="col-form-label">Golongan Darah</label>
        </div>
        <div class="col-lg-9">
            {!! Form::select ('blood_group', ['G'=> '--Golongan Darah--', 'A' => 'A', 'B' => 'B', 'C'=>'AB', 'D'=>'O'], null, ['class' => 'form-control']) !!}

        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="citizen_status" class="col-form-label">Kewarganegaraan</label>
        </div>
        <div class="col-lg-9">
            {!! Form::select ('citizen_status', ['K'=> '--Kewarganegaraan--', 'Indonesia' => 'Indonesia', 'Lainnya' => 'Lainnya',], null, ['class' => 'form-control']) !!}

        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="address" class="col-form-label">Alamat</label>
        </div>
        <div class="col-lg-9">
            {!! Form::text('address', null, ['class' => 'form-control', 'placeholder'=>'Alamat']) !!}

        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="regencies" class="col-form-label">Kabupaten</label>
        </div>
        <div class="col-lg-9">
            {!! Form::select('regencies', $regencies, null, ['class' => 'form-control', 'placeholder'=>'Kabupaten']) !!}

        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="districts" class="col-form-label">Kecamatan</label>
        </div>
        <div class="col-lg-9">
            {!! Form::select('districts', $districts,null, ['class' => 'form-control', 'placeholder'=>'Kecamatan']) !!}
        </div>
    </div>
</div>


<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="email" class="col-form-label">Email</label>
        </div>
        <div class="col-lg-9">
            {!! Form::text('email', null, ['class' => 'form-control', 'placeholder'=>'Email']) !!}

        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="phone_number" class="col-form-label">No Telepon</label>
        </div>
        <div class="col-lg-9">
            {!! Form::text('phone_number', null, ['class' => 'form-control', 'placeholder'=>'No Telepon']) !!}

        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="id_card_number" class="col-form-label">No KTP</label>
        </div>
        <div class="col-lg-9">
            {!! Form::text('id_card_number', null, ['class' => 'form-control', 'placeholder'=>'No KTP']) !!}

        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="bpjs" class="col-form-label">BPJS</label>
        </div>
        <div class="col-lg-9">
            {!! Form::text('bpjs', null, ['class' => 'form-control', 'placeholder'=>'BPJS']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="npwp" class="col-form-label">NPWP</label>
        </div>
        <div class="col-lg-9">
            {!! Form::text('npwp', null, ['class' => 'form-control', 'placeholder'=>'NPWP']) !!}
        </div>
    </div>
</div>


<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="employee_status" class="col-form-label">Status Pegawai</label>
        </div>
        <div class="col-lg-9">
            {!! Form::text('employee_status', null, ['class' => 'form-control', 'placeholder'=>'Status Pegawai']) !!}
        </div>
    </div>
</div>


<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="retirement_age_limit" class="col-form-label">Batas Usia Pensiun</label>
        </div>
        <div class="col-lg-9">
            {!! Form::text('retirement_age_limit', null, ['class' => 'form-control', 'placeholder'=>'Batas Usia Pensiun']) !!}
        </div>
    </div>
</div>



<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="username" class="col-form-label">Username</label>
        </div>
        <div class="col-lg-9">
            {!! Form::text('username', null, ['class' => 'form-control', 'placeholder'=>'Username']) !!}

        </div>
    </div>


    <div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="email" class="col-form-label">Foto</label>
        </div>
        <div class="col-lg-9">
            <div class="col-md-4 text-center">
                <img id="blah" src="https://th.bing.com/th/id/OIP.inXSw5jbycIIlXC1dIXdiwHaIL?pid=ImgDet&rs=1" width="150px" height="150px" class="avatar">
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
</div>


