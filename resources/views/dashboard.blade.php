@extends("layout.master")

@section('title')
    Dashboard
@endsection

@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                    <a href="{{ route('users') }}" class="inline-flex items-center px-6 py-4 border border-gray-400 shadow-sm text-base font-medium rounded-md text-gray-700 bg-white">
                        Gestion des utilisateurs
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@endsection
