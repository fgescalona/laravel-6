@extends('layout')

@section('content')


    <div id="wrapper">
        <div id="page" class="container">
            <div id="content">

                <h1>Our latest articles</h1>
                <br><br><br>
                
                <ul class="style1">

                    @foreach ($articles as $article)
                        <li class="first">
                            <h3><a href="{{ $article->path() }}">{{ $article->title }}</a></h3>
                            <p><a href="{{ $article->path() }}">{{ $article->excerpt }}</a></p>
                        </li>
                    @endforeach
                    
                </ul>
                
            </div>
        </div>
    </div>

@endsection