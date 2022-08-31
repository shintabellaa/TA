{{-- form copy mulai --}}
<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="nip_nik" class="col-form-label">Nama Pegawai</label>
        </div>
        <div class="col-lg-9">
            {{-- {!!  auth()->user()->real_name !!} --}}
            {!! Form::select('nip_nik', $biodatapegawai, null, ['class' => 'form-control', 'placeholder'=>'Nama Pegawai']) !!}
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="name" class="col-form-label">Nama Kerabat</label>
        </div>
        <div class="col-lg-9">
            {{-- pakai iko taruiuh --}}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder'=>'Nama']) !!}
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="id_number" class="col-form-label">NIK Kerabat</label>
        </div>
        <div class="col-lg-9">
            {{-- pakai iko taruiuh --}}
            {!! Form::text('id_number', null, ['class' => 'form-control', 'placeholder'=>'NIK']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="relationship" class="col-form-label">Hubungan dengan pegawai</label>
        </div>
        <div class="col-lg-9">
            {!! Form::text('relationship', null, ['class' => 'form-control', 'placeholder'=>'Hubungan dengan pegawai']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="phone_number" class="col-form-label">No HP</label>
        </div>
        <div class="col-lg-9">
            {!! Form::text('phone_number', null, ['class' => 'form-control', 'placeholder'=>'No HP']) !!}

        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="birth_place " class="col-form-label">Tempat Lahir</label>
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
            <label for="occupation" class="col-form-label">Pekerjaan</label>
        </div>
        <div class="col-lg-9">

            {!! Form::text('occupation', null, ['class' => 'form-control', 'placeholder'=>'Pekerjaan']) !!}
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="last_education" class="col-form-label">Pendidikan Terakhir</label>
        </div>
        <div class="col-lg-9">
            {!! Form::select('last_education', $education, null, ['class' => 'form-control', 'placeholder'=>'Tingkat']) !!}
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="npwp_no" class="col-form-label">NPWP</label>
        </div>
        <div class="col-lg-9">
            {{-- pakai iko taruiuh --}}
            {!! Form::text('npwp_no', null, ['class' => 'form-control', 'placeholder'=>'NPWP']) !!}
        </div>
    </div>
</div>

