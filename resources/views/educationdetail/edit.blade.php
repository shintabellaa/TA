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
                            bagian $training, bagian route, dan bagian training->training_id
                        --}}
                        {{ Form::model($educationdetail, array('method' => 'PATCH', 'url' => route('educationdetail.update', $educationdetail->education_details_id), 'files' => true)) }}
                            @include('educationdetail._form')
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
