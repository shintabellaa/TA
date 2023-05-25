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
            <label for="training_name" class="col-form-label">Nama Diklat</label>
        </div>
        <div class="col-lg-9">
            {!! Form::text('training_name', null, ['class' => 'form-control', 'placeholder'=>'Nama Diklat']) !!}
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
                <label for="type_of_training" class="col-form-label">Jenis Diklat</label>
            </div>
            <div class="col-lg-9">
                {!! Form::text('type_of_training', null, ['class' => 'form-control', 'placeholder'=>'Jenis Diklat']) !!}
            </div>
        </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="place" class="col-form-label">Tempat Diklat</label>
        </div>
        <div class="col-lg-9">
            {!! Form::text('place', null, ['class' => 'form-control', 'placeholder'=>'Tempat Diklat']) !!}
        </div>
    </div>
</div>


<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="hour" class="col-form-label">Jam</label>
        </div>
        <div class="col-lg-9">
            {!! Form::text('hour', null, ['class' => 'form-control', 'placeholder'=>'Jam']) !!}
        </div>
    </div>
</div>


<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="year" class="col-form-label">Tahun Diklat</label>
        </div>
        <div class="col-lg-9">
            {!! Form::text('year', null, ['class' => 'form-control', 'placeholder'=>'Tahun Diklat']) !!}
        </div>
    </div>
</div>


<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="certificate_file" class="col-form-label">Sertifikat</label>
        </div>
        <div class="col-lg-9">
            {!! Form::file('certificate_file', null, ['class' => 'form-control', 'placeholder'=>'Sertifikat']) !!}
        </div>
    </div>
</div>
