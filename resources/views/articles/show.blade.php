@extends('layout')

@section('content')


    <div id="wrapper">
        <div id="page" class="container">
            <div id="content">
                <div class="title">
                    <h2>{{ $article->title }}</h2>
                    <span class="byline">Mauris vulputate dolor sit amet nibh</span> </div>
                <p>{{ $article->body }}</p>
                
            </div>
        </div>
    </div>

@endsection