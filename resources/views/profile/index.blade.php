@extends('layouts.front')

@section('content')
    <div class = "container">
        <p>profile</p>
        <hr color = "rgb(0 128 128)">
        @if (!is_null($headline))
            <div class = "row">
                <div class = "headline col-md-10 mx-auto">
                    <div class = "row">
                        <div class = "col-md-6">
                            <div class = "caption mx-auto">
                                <div class = "name p-2">
                                    <h1>{{ str_limit($headline->name, 70) }}</h1>
                                </div>
                            </div>
                        </div>
                        <div class = "col-md-6">
                            <p class = "hobby mx-auto">{{ str_limit($headline->hobby, 650) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <hr color = "rgb(0 128 128)">
        <div class = "row">
            <div class = "posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                    <div class = "row">
                        <div class = "text col-md-6">
                            <div class = "date">{{ $post->updated_at->format('Y年m月d日') }}</div>
                            <div class = "name">{{ str_limit($post->name, 150) }}</div>
                            <div class = "hobby mt-3">{{ str_limit($post->hobby, 1500) }}</div>
                        </div>    
                    </div>
                    <hr color = "rgb(0 128 128)">
                @endforeach    
            </div>
        </div>
    </div>
@endsection    