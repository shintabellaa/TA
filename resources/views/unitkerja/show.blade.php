@extends('layouts.myApp')

@section('content')
<div class="container-fluid">
    <div class="fade-in">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <h5>
                        <div class="card-header">
                            <div class="d-flex">
                                Detail Unit {{ $work_unit->name }}
                            </div>
                        </div>
                    </h5>
                    <div class="card-body">
                        <table class="table table-responsive">
                            
                            <tr>
                                <th>Nama</th>
                                <td>:</td>
                                <td>{{ $work_unit->name }}</td>
                            </tr>


                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
