
<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="name" class="col-form-label">Nama</label>
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
            <label for="token" class="col-form-label">Token</label>
        </div>
        @if ($api == null)
        <div class="col-lg-9">
            {{-- pakai iko taruiuh --}}
            {!! Form::text('token', $token, ['class' => 'form-control', 'placeholder'=>'Token', 'readonly' => true]) !!}
        </div>
        @else
        <div class="col-lg-9">
            {{-- pakai iko taruiuh --}}
            {!! Form::text('token', $api->token, ['class' => 'form-control', 'placeholder'=>'Token', 'readonly' => true]) !!}
        </div>
        @endif
    </div>
</div>

