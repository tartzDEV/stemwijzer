@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <div class="max-w-lg mx-auto">
        <h2 class="text-2xl font-semibold mb-6">Vul de Stemwijzer in</h2>

        <form method="POST" action="{{ route('stemwijzer.store') }}">
            @csrf

            <input type="hidden" name="vraag_id" value="{{ $vraagId }}">

            <div class="mb-4">
                <h3 class="text-lg font-semibold">{{ $vraag->vraag }}</h3>

                <div class="space-y-2 mt-4">
                    <label class="flex items-center space-x-2">
                        <input type="radio" name="vraag_{{ $vraag->id }}" value="pro" class="form-radio" required>
                        <span>Voor</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="radio" name="vraag_{{ $vraag->id }}" value="contra" class="form-radio">
                        <span>Tegen</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="radio" name="vraag_{{ $vraag->id }}" value="neutraal" class="form-radio">
                        <span>Neutraal</span>
                    </label>
                </div>
            </div>

            <div class="flex justify-between items-center mt-6">
                
                @if($vraagId < 15)
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">Volgende</button>
                @else
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">Resultaat bekijken</button>
                @endif
                <span>Vraag {{ $vraagId }} van {{ \App\Models\Vraag::count() }}</span>
            </div>

        </form>
    </div>
</div>
@endsection