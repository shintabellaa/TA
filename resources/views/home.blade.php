@extends('layouts.myApp')


@section('content')

<div class="container-fluid">
<div class="jumbotron">
  <h1 class="display-4">SELAMAT DATANG </h1>
  <p class="lead">Sistem Informasi Pengelolaan Data Pegawai Universitas Andalas</p>
  <hr class="my-4">
  <h5>Anda adalah <strong>{{auth()->user()->role->nama_role}}</strong></h5>
  <br>
  <a class="btn btn-youtube btn-lg" href="#" role="button"> </a>

</div>

@endsection
