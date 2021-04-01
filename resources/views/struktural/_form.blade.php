{{-- form copy mulai --}}
<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="structural_id" class="col-form-label">ID</label>
        </div>
        <div class="col-lg-9">
            {{-- pakai iko taruiuh --}}
            {!! Form::text('structural_id', null, ['class' => 'form-control', 'placeholder'=>'Id']) !!}
        </div>
    </div>
</div>
{{-- form copy akhir --}}
<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="name" class="col-form-label">Name</label>
        </div>
        <div class="col-lg-9">
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder'=>'Name']) !!}
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="entry_date" class="col-form-label">Tanggal Masuk</label>
        </div>
        <div class="col-lg-9">
            {!! Form::date('entry_date', null, ['class' => 'form-control', 'placeholder'=>'Name']) !!}
        </div>
    </div>
</div>
