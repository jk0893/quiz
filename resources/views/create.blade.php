@extends('layouts.header')
@section('main-content')
    <main>
        <h1 class="text-center text-3xl pt-16">Готовим харчо</h1>
        <form action="{{ route('recipe.store') }}" method="POST">
            @csrf
            <section class="font-sans pt-16 flex flex-col gap-8 justify-center">
                <div class="flex flex-col gap-4">
                    <label for="meat_id">Какое мясо?</label>
                    <select class="p-1 rounded-md bg-amber-900 checked:bg-amber-700 text-amber-50" name="meat_id" id="meat_id">
                        @foreach ($meats as $meat)
                            <option value="{{ $meat->id }}">{{ $meat->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex flex-col gap-4">
                    <label for="cereal_id">Какая крупа?</label>
                    <select class="p-1 rounded-md bg-amber-900 text-amber-50" name="cereal_id" id="cereal_id">
                        @foreach ($cereals as $cereal)
                            <option value="{{ $cereal->id }}">{{ $cereal->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex flex-col gap-4">
                    <label for="herb_id">Какая приправа?</label>
                    <select class="p-1 rounded-md bg-amber-900 text-amber-50" name="herb_id" id="herb_id">
                        @foreach ($herbs as $herb)
                            <option value="{{ $herb->id }}">{{ $herb->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex flex-col gap-4">
                    <label for="vegetable_id">Какие овощи?</label>
                    <select class="p-1 rounded-md bg-amber-900 text-amber-50" name="vegetable_id" id="vegetable_id">
                        @foreach ($vegetables as $vegetable)
                            <option value="{{ $vegetable->id }}">{{ $vegetable->name }}</option>
                        @endforeach
                    </select>
                </div>
            </section>
            <div class="flex justify-center pt-6">
                <button class="px-4 py-2 border rounded-lg bg-amber-900 hover:bg-amber-700 text-amber-50" type="submit">Готово</button>
            </div>
        </form>
    </main>
@endsection
