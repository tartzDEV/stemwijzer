@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <div class="text-center">
        <h2 class="text-2xl font-semibold mb-6">Jouw Beste Match</h2>
        
        <div class="mb-4">
        <img src="{{ asset('images/'.$bestMatchPartij->logo) }}" alt="{{ $bestMatchPartij->naam }} logo" class="w-32 h-32 object-contain mx-auto">
          </div>

        <h3 class="text-xl font-semibold mb-2">{{ $bestMatchPartij->naam }}</h3>
        <p class="text-gray-700 mb-4">{{ $bestMatchPartij->beschrijving }}</p>

        <div class="mt-4">
            <p class="font-medium">Je hebt het meeste overeenstemming met deze partij, gebaseerd op jouw antwoorden!</p>
        </div>

        <div class="mt-6">
            <a href="{{ route('stemwijzer.index') }}" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">Start opnieuw</a>
        </div>
    </div>
</div>
@endsection