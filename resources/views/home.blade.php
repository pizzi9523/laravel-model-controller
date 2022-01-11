@extends('layouts.app')

@section('content')
    <h1 class="section_title">Welcome in Home</h1>
    <div class="movies">
    
        @foreach ($movies as $movie)
        <div class="col-4">
            <div class="container">
                <div class="card">
                    <div class="header_card">
                        <img style="height: 275px; width: 600px; " src="{{asset("img/ciak.jpg")}}"
                            alt="">
                    </div>
    
                    <div class="body_card">
                        <div class="card_content">
    
                            <h1>Titolo: {{$movie->title}}</h1>
                            <p>Titolo Originale: {{$movie->original_title}}</p>
    
                            <div class="container_infos">
                                <div class="info">
                                    <span>Nationality</span>
                                    {{$movie->nationality}}
                                </div>

                                <div class="info">
                                    <span>Vote</span>
                                    {{$movie->vote}}
                                </div>
    
                                <div class="date">
                                    <span>Date</span>
    
                                    <div class="data">
                                        <ul>
                                            <li>{{$movie->date}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            {{-- <div class="card">
                <h4>Titolo: {{$movie->title}}</h4>
                <h4>Titolo Originale: {{$movie->original_title}}</h4>

                 <div class="nationality">
                    Nazionalità: {{$movie->nationality}}
                 </div>
                <div class="date">
                   Data: {{$movie->date}}
                </div>

                <div class="vote">
                   Voto: {{$movie->vote}}
                 </div>
            </div> --}}
        <!-- /.card -->


        </div>
         
            
        @endforeach
       
    </div>
    <!-- /.movies -->
    
@endsection