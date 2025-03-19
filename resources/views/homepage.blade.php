@extends("layouts.master")

@section("content")
<h1>Hello world</h1>

<div class="row">
    <div class="col">
        <x-card>
            <x-slot:cover>#</x-slot:cover>
            Titolo
        </x-card>
    </div>
</div>

@endsection
