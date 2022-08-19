@extends('layouts.myApp')

@section('content')
<div class="container-fluid">
    <div class="fade-in">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                     <div class="card-body">
                        {{ Form::model($fungsionaldetail, array('method' => 'PATCH', 'url' => route('fungsionaldetail.update', $fungsionaldetail->functional_id), 'files' => true)) }}
                            @include('fungsionaldetail._form')
                            <div>
                                <button type="submit" class="btn btn-primary"><span class="cil-save btn-icon mr-2"></span>Simpan</button>
                            </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
