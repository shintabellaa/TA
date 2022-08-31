<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="nip_nik" class="col-form-label">Nama Pegawai</label>
        </div>
        <div class="col-lg-9">
            {!! Form::select('nip_nik', $biodatapegawai, null, ['class' => 'form-control', 'placeholder'=>'Nama Pegawai']) !!}
            {{-- {!!  auth()->user()->real_name !!} --}}

        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="education_id" class="col-form-label">Tingkat</label>
        </div>
        <div class="col-lg-9">
            {{-- pakai iko taruiuh --}}
            {!! Form::select('educationselect', $education, null, ['class' => 'form-control', 'placeholder'=>'Tingkat']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="name" class="col-form-label">Nama Sekolah</label>
        </div>
        <div class="col-lg-9">
            {{-- pakai iko taruiuh --}}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder'=>'Nama Sekolah']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="major" class="col-form-label">Bidang</label>
        </div>
        <div class="col-lg-9">
            {{-- pakai iko taruiuh --}}
            {!! Form::text('major', null, ['class' => 'form-control', 'placeholder'=>'Bidang']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="graduation_year" class="col-form-label">Tahun Kelulusan</label>
        </div>
        <div class="col-lg-9">
            {{-- pakai iko taruiuh --}}
            {!! Form::text('graduation_year', null, ['class' => 'form-control', 'placeholder'=>'Tahun Kelulusan']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="country" class="col-form-label">Negara</label>
        </div>
        <div class="col-lg-9">
            {{-- pakai iko taruiuh --}}
            {!! Form::text('country', null, ['class' => 'form-control', 'placeholder'=>'Negara']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="dean_headmaster" class="col-form-label">Dekan/Kepala Sekolah</label>
        </div>
        <div class="col-lg-9">
            {{-- pakai iko taruiuh --}}
            {!! Form::text('dean_headmaster', null, ['class' => 'form-control', 'placeholder'=>'Dekan/Kepala Sekolah']) !!}
        </div>
    </div>
</div>


<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="certificate_file" class="col-form-label">File Ijazah</label>
        </div>
        <div class="col-lg-9">
            {{-- {!! Form::file('certificate_file', null, ['class' => 'form-control', 'placeholder'=>'File Ijazah']) !!} --}}
            {!! Form::file('certificate_file',  ['class' => 'form-control', 'accept'=>'application/pdf', 'placeholder'=>'File Ijazah']) !!}

        </div>
    </div>
</div>
