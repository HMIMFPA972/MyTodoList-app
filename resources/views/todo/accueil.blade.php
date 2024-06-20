@extends('todo.layouts.app')

@section('main')

<h1>Bonjour le Groupe DWWM !!!!!</h1>
{{-- @dd($tasks) --}}
<h2>Gestion des tâches</h2>

<form action="{{route('todo.create')}}" method="post">
    @csrf
    <label for="title"></label>
    <input type="text" name="title" value="">
    <button type="submit">Ajouter</button>
</form>

<h2>Liste des tâches</h2>

<ul>
    @foreach ($tasks as $task)
        <div>
            <span>
                {{$task->title}}
            </span>
            <span>
                {{$task->description}}
            </span>
            <a href="#"> edit</a>
            <a href="#"> delete</a>
        </div>
    @endforeach
</ul>
@endsection


@section('footer')
<footer class="py-16 text-center text-sm text-black dark:text-white/70">
    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
</footer>

@endsection
