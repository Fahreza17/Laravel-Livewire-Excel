@extends('layouts.app')

@section('content')
    <div class="flex flex-col items-center justify-center min-h-screen text-white bg-gradient-to-r from-blue-500 via-blue-400 to-blue-300">
        <div>
            <h1 class="mb-6 text-4xl font-bold">Welcome to Your ToDoList Dashboard</h1>
            <p class="mb-8 text-lg">Stay organized and boost your productivity with our ToDoList app.</p>
            <a href="{{ route('login') }}" class="px-6 py-2 font-bold text-blue-500 bg-white rounded-full hover:bg-blue-100">
                Get Started
            </a>
        </div>
    </div>
@endsection
