<div class="form-group">
    <div class="row">
        <div class="col-lg-9">
            {!! Form::text('nip_nik', $biodatapegawai->nip_nik, ['class' => 'form-control', 'hidden']) !!}
        </div>
    </div>
</div>



<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="nama" class="col-form-label">Nama Pegawai</label>
        </div>
        <div class="col-lg-9">
            {!! Form::text('nama', $biodatapegawai->title_ahead.' '.$biodatapegawai->real_name.' '.$biodatapegawai->back_title, ['class' => 'form-control', 'placeholder'=>'Nama Pegawai', 'disabled']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="work_unit_id" class="col-form-label">Unit Kerja</label>
        </div>
        <div class="col-lg-9">
            {!! Form::select('work_unit_id', $work_unit ,null, ['class' => 'form-control', 'placeholder'=>'unit kerja']) !!}

        </div>
    </div>
</div>





{{-- <div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="information" class="col-form-label">Unit Kerja</label>
        </div>
        <div class="col-lg-9">

            {!! Form::text('information', null, ['class' => 'form-control', 'placeholder'=>'Unit Kerja']) !!}
        </div>
    </div>
</div> --}}




<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="employee_transfer_date" class="col-form-label">Tanggal Mutasi</label>
        </div>
        <div class="col-lg-9">
            {!! Form::date('employee_transfer_date', null, ['class' => 'form-control', 'placeholder'=>'Tanggal Mutasi']) !!}
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
            <label for="sk_file" class="col-form-label">File SK</label>
        </div>
        <div class="col-lg-9">
            {!! Form::file('sk_file', null, ['class' => 'form-control', 'placeholder'=>'File SK']) !!}
        </div>
    </div>
</div>





