
<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="nip_nik" class="col-form-label">Nama Pegawai</label>
        </div>
        <div class="col-lg-9">
            {!!  auth()->user()->real_name !!}
            {{-- {!! Form::select('nip_nik',$biodatapegawai, null, ['class' => 'form-control', 'placeholder'=>'Nama Pegawai']) !!} --}}
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
            {{-- {!! Form::file('certificate_file', null, ['class' => 'form-control', 'placeholder'=>'Sertifikat']) !!} --}}
            {!! Form::file('certificate_file',  ['class' => 'form-control', 'accept'=>'application/pdf', 'placeholder'=>'File Ijazah']) !!}

        </div>
    </div>
</div>
