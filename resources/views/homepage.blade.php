@extends("layouts.master")

@section("content")

@php
    $comics= config("comics")
@endphp

<div class="container py-5 my-3">
    <div class="row g-5">
        
        @foreach ($comics as $comic)
            
        <div class="col-sm-6 col-md-4 col-lg-3 col-xxl-2">
            <x-card>
                <x-slot:cover>{{$comic["thumb"]}}</x-slot:cover>
                {{$comic["title"]}}
            </x-card>
        </div>
        @endforeach
    </div>
</div>

@endsection
