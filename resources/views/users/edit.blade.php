@extends('layout.master')

@section('title', 'Modification de mon profil')

@section('content')
    <div id="divEdit" class="bg-gray-100 overflow-hidden shadow-sm sm:rounded-lg">
        <h3 class="text-3xl px-4 py-4" style="background-color: lightgray">Modification de mon profil</h3>
        @if(session('success'))
            <div class="text-xl text-green-400">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('users.update', $user) }}" method="POST" class="mx-auto">
        @csrf
        @method('PUT')
            <div class="px-4 py-5 bg-white sm:p-6">
                <div class="py-2">
                    <label for="name" class="block text-sm font-medium text-gray-700">
                        Prénom
                    </label>
                    <input type="text" name="name" id="name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                    value="{{ old('name', $user->name) }}">
                    @error('name')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="py-2">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="text" name="email" id="email" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                    value="{{ old('email', $user->email) }}">
                    @error('email')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                @if(Auth::user()->admin and url()->previous() == route('users'))
                    <div class="py-2">
                        <label for="admin" class="block text-sm font-medium text-gray-700">Rôle</label>
                        <div class="d-flex py-2">
                            <label for="admin" class="block text-sm font-medium text-gray-700">Utilisateur</label>
                            <input type="radio" name="admin" id="admin" class="mt-1 shadow-sm border-gray-300 mx-2" value="0">
                            <label for="admin" class="block text-sm font-medium text-gray-700">Administrateur</label>
                            <input type="radio" name="admin" id="admin" class="mt-1 shadow-sm border-gray-300 mx-2" value="1">
                        </div>
                        {{--@error('role')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror--}}
                    </div>
                @endif
                <div class="py-2">
                    <input type="submit" class="cursor-pointer inline-flex items-center w-1/4 px-2 py-4 border border-gray-400
                    shadow-sm text-base font-medium rounded-md text-gray-700 bg-white justify-center" value="Modifier">
                </div>
            </div>
        </form>
    </div>
@endsection
