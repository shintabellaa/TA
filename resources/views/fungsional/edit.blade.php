@extends('layouts.myApp')

@section('content')
<div class="container-fluid">
    <div class="fade-in">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                     <div class="card-body">
                        {{--
                            ubah route
                            bagian $fungsional, bagian route, dan bagian fungsional->fungsional_id
                        --}}
                        {{ Form::model($fungsional, array('method' => 'PATCH', 'url' => route('ufungsional.update', $struktural->struktural_id), 'files' => true)) }}
                            @include('fungsional._form')
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
