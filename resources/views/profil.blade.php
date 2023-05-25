@extends('layouts.myApp')

@section('title')
    HOME
@endsection

@section('content')
    <div class="row">
        <?php echo Auth::user(); ?>
    </div>
@endsection
