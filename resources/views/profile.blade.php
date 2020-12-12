@extends('layouts.app')

@section('content')
    <div class="container justify-content-center">

        <div style=" display: flex;
  align-items: center;
  justify-content: center;">
            <img src="{{asset('img/avatar.svg')}}" style="width: 200px ; margin: 0 auto">

        </div>




        <h1 align="center" style="margin-top: 10px">Profile</h1>

        <h3>Nama : {{Auth::user()->id}}</h3>
        <h3>Email : {{Auth::user()->email}}</h3>
        <h3>No. Handphone : {{Auth::user()->no_hp}}</h3>
    </div>
@endsection
