{{-- <div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="nip_nik" class="col-form-label">NIP/NIK</label>
        </div>
        <div class="col-lg-9">
            {!! Form::text('nip_nik', null, ['class' => 'form-control', 'placeholder'=>'NIP/NIK']) !!}
        </div>
    </div>
</div> --}}

<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="information" class="col-form-label">Jabatan Struktural</label>
        </div>
        <div class="col-lg-9">
            {{-- pakai iko taruiuh --}}
            {!! Form::text('information', null, ['class' => 'form-control', 'placeholder'=>'Jabatan Struktural']) !!}
        </div>
    </div>
</div>

{{-- 
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
            {!! Form::text('sk_no', null, ['class' => 'form-control', 'placeholder'=>'NO SK']) !!}

        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="sk_date" class="col-form-label">Tanggal SK</label>
        </div>
        <div class="col-lg-9">
            {!! Form::date('sk_date', null, ['class' => 'form-control', 'placeholder'=>'Tanggal SK']) !!}

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
            {!! Form::select ('status', ['S'=> '--Status--', 'A' => 'Aktif', 'T' => 'Tidak Aktif'], ['class' => 'form-control']) !!}

        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="sk_file" class="col-form-label">File SK</label>
        </div>
        <div class="col-lg-9">
            {!! Form:: file('sk_file',) !!}

        </div>
    </div>
</div> --}}
