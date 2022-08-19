<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="nip_nik" class="col-form-label">Nama Pegawai</label>
        </div>
        <div class="col-lg-9">
            {!! Form::select('nip_nik', $biodatapegawai, null, ['class' => 'form-control', 'placeholder'=>'Nama Pegawai']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="functional_id" class="col-form-label">Jabatan Fungsional</label>
        </div>
        <div class="col-lg-9">
            {{-- pakai iko taruiuh --}}
            {!! Form::select('functional_id', $fungsional, null, ['class' => 'form-control', 'placeholder'=>'Jabatan Fungsional']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="tmt" class="col-form-label">TMT</label>
        </div>
        <div class="col-lg-9">
            {!! Form::date('tmt', null, ['class' => 'form-control', 'placeholder'=>'TMT']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="sk_no" class="col-form-label">No SK</label>
        </div>
        <div class="col-lg-9">
            {!! Form::text('sk_no', null, ['class' => 'form-control', 'placeholder'=>'No SK']) !!}

        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="sk_date" class="col-form-label">Tanggal SK</label>
        </div>
        <div class="col-lg-9">
            {!! Form::date('sk_date', null, ['class' => 'form-control', 'placeholder'=>'sk_date']) !!}

        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="sign_by" class="col-form-label">Diputuskan Oleh</label>
        </div>
        <div class="col-lg-9">
            {!! Form::text('sign_by', null, ['class' => 'form-control', 'placeholder'=>'Diputuskan Oleh']) !!}

        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="status" class="col-form-label">Status</label>
        </div>
        <div class="col-lg-9">
            {!! Form::select ('status', ['S'=> '--Status--', 'Aktif' => 'Aktif', 'Tidak Aktif' => 'Tidak Aktif'], null, ['class' => 'form-control']) !!}

        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="sk_file" class="col-form-label">File SK</label>
        </div>
        <div class="col-lg-9">
            {!! Form::file('sk_file', null, ['class' => 'form-control', 'placeholder'=>'File SK']) !!}
        </div>
    </div>
</div>





