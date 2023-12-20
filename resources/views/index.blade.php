@extends('layouts.header')
@section('main-content')
    <main>
        <a class="border border-amber-900 p-2 rounded-md " href="{{ route('recipe.create') }}">Новый рецепт</a>
        <section class="h-screen grid grid-cols-4 place-content-center gap-12">
            @foreach ($recipes as $recipe)
                <div class="border border-amber-900 p-10 rounded-xl">
                    <h2 class="text-3xl">Рецепт харчо №{{ $recipe->id }}</h2>
                    <section class="font-sans flex gap-8  mt-8 mb-8">
                        <div class="flex flex-col items-start">
                            <p>Мясо:</p>
                            <p>Крупа:</p>
                            <p>Приправы:</p>
                            <p>Овощи:</p>
                        </div>
                        <div class="flex flex-col items-end">
                            <p>{{ $recipe->meat->name }}</p>
                            <p>{{ $recipe->cereal->name }}</p>
                            <p>{{ $recipe->herb->name }}</p>
                            <p>{{ $recipe->vegetable->name }}</p>
                        </div>
                    </section>
                    <div class="flex justify-center">
                        <button class="p-2 border border-amber-900 rounded-lg hover:bg-amber-900 hover:text-amber-50"
                            type="submit">
                            <a href="{{ route('recipe.show', $recipe->id) }}">Посмотреть</a>
                        </button>
                    </div>
                </div>
            @endforeach
        </section>
    </main>
@endsection
