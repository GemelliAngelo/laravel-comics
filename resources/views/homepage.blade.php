@extends("layouts.master")

@section("content")

@php
    $comics= config("comics")
@endphp

<div class="container py-5 my-3">
    <div class="row row-cols-6 g-5">
        
        @foreach ($comics as $comic)
            
        <div class="col">
            <x-card>
                <x-slot:cover>#</x-slot:cover>
                Titolo
            </x-card>
        </div>
        @endforeach
    </div>
</div>

@endsection
