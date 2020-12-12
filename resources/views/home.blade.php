@extends('layouts.app')


@section('style')

@endsection

@section('content')
    <div class="container justify-content-center" style="margin-top: 10px">
        <h1 align="center">Daftar Kandidat</h1>

            <div style="display: flex;margin-top: 70px;justify-content: center">
                <div class="card border-primary" style="width: 18rem ; margin-right: 50px">
                    <img src="{{asset('img/avatar.svg')}}" style="width: 65%;margin: 0 auto ; margin-top: 50px" class="card-img-top" alt="...">
                    <hr>
                    <div class="card-body">
                        <p class="card-text"> No urut : 1</p>
                        <p class="card-text"> Nama Lengkap : xxx</p>
                        <p class="card-text"> TTL : xxx</p>
                        <p class="card-text"> Agama : xxx</p>
                        <p class="card-text"> Alamat : xxx</p>
                        <p class="card-text"> Pendidikan Terakhir : XXX </p>
                        <p class="card-text">Visi-misi : XXX</p>

                    </div>
                </div>



                <div class="card border-primary" style="width: 18rem">
                    <img src="{{asset('img/avatar.svg')}}" style="width: 65%;margin: 0 auto ; margin-top: 50px" class="card-img-top" alt="...">
                    <hr>
                    <div class="card-body">
                        <p class="card-text"> No urut : 2</p>
                        <p class="card-text"> Nama Lengkap : xxx</p>
                        <p class="card-text"> TTL : xxx</p>
                        <p class="card-text"> Agama : xxx</p>
                        <p class="card-text"> Alamat : xxx</p>
                        <p class="card-text"> Pendidikan Terakhir : XXX </p>
                        <p class="card-text">Visi-misi : XXX</p>

                    </div>
                </div>

            </div>
        <div style=" display: flex;
  align-items: center;
  justify-content: center;">
        <a type="button" href="/langkah" class="btn btn-warning" style="width: 60%;margin-top: 50px; text-align: center">Langkah Memilih Calon Pasangan Pemilhan Umum </a>

        </div> </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,160L30,160C60,160,120,160,180,138.7C240,117,300,75,360,74.7C420,75,480,117,540,138.7C600,160,660,160,720,144C780,128,840,96,900,74.7C960,53,1020,43,1080,42.7C1140,43,1200,53,1260,58.7C1320,64,1380,64,1410,64L1440,64L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>

@endsection
