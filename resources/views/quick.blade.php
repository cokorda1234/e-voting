@extends('layouts.app')



@section('content')

    <div class="container justify-content-center" style="margin-top: 10px">
        <h1 align="center">Quick count Kandidat</h1>

        <div style="display: flex;margin-top: 70px;justify-content: center">
            @foreach($kandidat as $s)
            <div class="card border-primary" style="width: 18rem ; margin-right: 50px">
                <img src="{{asset('img/avatar.svg')}}" style="width: 65%;margin: 0 auto ; margin-top: 50px" class="card-img-top" alt="...">
                <hr>
                <div class="card-body">
                    <p class="card-text"> No urut : {{$s->id}}</p>
                    <p class="card-text"> Nama : {{$s->nama}}</p>
                    <p class="card-text"> Visi : {{$s->visi}}</p>
                    <p class="card-text"> Misi : {{$s->misi}}</p>

                </div>
                <div class="card-footer">
                    <p> Hasil Suara {{count($s->voteuser)}}</p>

                </div>
            </div>

            @endforeach



        </div>
        <div id="chartContainer" style="height: 300px; width: 100%; margin-top: 50px"></div>

    </div>


    <svg style="position: absolute;bottom: -500px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,160L30,160C60,160,120,160,180,138.7C240,117,300,75,360,74.7C420,75,480,117,540,138.7C600,160,660,160,720,144C780,128,840,96,900,74.7C960,53,1020,43,1080,42.7C1140,43,1200,53,1260,58.7C1320,64,1380,64,1410,64L1440,64L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>



@endsection


@push('script')
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script>
    var accounts = [];
    var hasil = [];
    var i = 0;

    @foreach($kandidat as $t)
        accounts[i] = "{{$t->id}}. Total Suara : ";
        hasil[i] = "{{count($t->voteuser)}}";
    i++;

        @endforeach
        console.log(accounts.length);




    window.onload = function() {
        var z = 0;

var test = "{y: 1, label: `kandidat 1 : `},{y: 2, label: `kandidat 2 : `}";


        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            title: {
                text: "Quick Count"
            },
            data: [{
                type: "pie",
                startAngle: 120,
                indexLabel: "{label} {y}",
                dataPoints: [

                            @for ($i = 0; $i < count($kandidat); $i++)
                        {y: hasil[{{$i}}], label: "ID kandidat No : " + accounts[{{$i}}]} ,
                    @endfor


                ]
            }]
        });

        chart.render();

    }
</script>
@endpush
