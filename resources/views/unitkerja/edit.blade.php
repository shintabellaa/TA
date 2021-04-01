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
                            bagian $work_unit, bagian route, dan bagian work_unit->work_unit_id
                        --}}
                        {{ Form::model($work_unit, array('method' => 'PATCH', 'url' => route('unit-kerja.update', $work_unit->work_unit_id), 'files' => true)) }}
                            @include('unitkerja._form')
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
