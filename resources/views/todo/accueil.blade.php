@extends('todo.layouts.app')

@section('main')

<h1>Bonjour le Groupe DWWM !!!!!</h1>
@dd($tasks)

@endsection


@section('footer')
<footer class="py-16 text-center text-sm text-black dark:text-white/70">
    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
</footer>

@endsection
