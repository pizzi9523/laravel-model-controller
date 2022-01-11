@extends('layouts.app')

@section('content')
    <h1 class="section_title">Welcome in Home</h1>
    <div class="movies">

        @foreach ($movies as $movie)
        <div class="col-4">
            <div class="card">
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
            </div>
        <!-- /.card -->


        </div>
         
            
        @endforeach
       
    </div>
    <!-- /.movies -->
    
@endsection