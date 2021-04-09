@extends('layouts.front')

@section('content')
    <div class = "container">
        <hr color = "c0c0c0">
        @if (!is_null($headline))
            <div class = "row">
                <div class = "headline col-md-10 mx-auto">
                    <div class = "row">
                        <div class = "col-md-6">
                            <div class = "caption mx-auto">
                                <div class = "image">
                                    @if ($headline->image_path)
                                        <img src = "{{ asset('storage/image/' . $headline->image_path) }}">
                                    @endif    
                                </div>
                                <div class = "title p-2">
                                    <h1>{{ str_limit($headline->title, 70) }}</h1>
                                </div>
                            </div>
                        </div>
                        <div class = "col-md-6">
                            <p class = "body mx-auto">{{ str_limit($headline->body, 650) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif    
    </div>