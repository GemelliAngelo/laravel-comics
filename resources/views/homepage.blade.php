@extends("layouts.master")

@section('page-title')
    Comics
@endsection

@section("content")

@php
    $comics= config("comics")
@endphp

<div class="jumbo">
    <div class="container px-0">
        <div class="title-badge bg-primary">
            <span class="fs-3">CURRENT SERIES</span>
        </div>
    </div>

</div>
<div class="container py-5">
    <div class="row gx-5 gy-3">
        
        @foreach ($comics as $comic)
            
        <div class="col-sm-6 col-md-4 col-lg-3 col-xxl-2">
            <x-card>
                <x-slot:cover>{{$comic["thumb"]}}</x-slot:cover>
                {{$comic["title"]}}
            </x-card>
        </div>
        @endforeach
        <div class="col text-center">
            <button class="btn btn-primary px-5 py-2 fw-bold">LOAD MORE</button>
        </div>
    </div>
</div>

<x-navbar></x-navbar>

@endsection
