@extends("layouts.master")

@section("content")
<div class="container">
    <div class="row">
        <div class="col">
            <x-card>
                <x-slot:cover>#</x-slot:cover>
                Titolo
            </x-card>
        </div>
    </div>
</div>

@endsection
