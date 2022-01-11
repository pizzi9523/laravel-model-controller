@extends('layouts.app')

@section('content')
    <h1>Welcome in Home</h1>
    <div class="movies">

        @foreach ($movies as $movie)
         <div class="card">
            <h2>{{$movie->title}}</h2>
            <h3>{{$movie->original_title}}</h3>

            <div class="nationality">
                {{$movie->nationality}}
            </div>
            <div class="date">
                {{$movie->date}}
            </div>

            <div class="vote">
                {{$movie->vote}}
            </div>
        </div>
        <!-- /.card -->
            
        @endforeach
       
    </div>
    <!-- /.movies -->
    
@endsection