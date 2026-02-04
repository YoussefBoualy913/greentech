@extends('layouts.app')

@section('title','Authentification - GreenTech Solutions')
    
@section('body-class','bg-gray-50 font-sans antialiased h-screen flex items-center justify-center')
    

@section('content')

    <div class="w-full max-w-md bg-white p-8 rounded-2xl shadow-xl border border-gray-100">

        <div class="text-center mb-8">
            <div
                class="inline-flex items-center justify-center w-12 h-12 rounded-xl bg-brand-600 text-white mb-4 shadow-lg shadow-brand-500/30">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                </svg>
            </div>
            <h1 class="text-2xl font-bold text-slate-900 tracking-tight">Authentification</h1>
            <p class="text-slate-500 mt-2 text-sm">Connectez-vous pour gérer le catalogue.</p>
        </div>

        <form action="{{ route('login') }}" method="POST" class="space-y-6">
            @csrf
            <div>
                <label for="email" class="block text-sm font-medium text-slate-700 mb-1">Adresse Email</label>
                <input type="email" id="email" name="email" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-500 focus:border-brand-500 outline-none transition-all placeholder-gray-400"
                    placeholder="admin@greentech.com" required>
                 @error('email')
                            <p class="text-red-500">{{ $message }}</p>
                 @enderror
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-slate-700 mb-1">Mot de passe</label>
                <input type="password" id="password" name="password" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-500 focus:border-brand-500 outline-none transition-all placeholder-gray-400"
                    placeholder="••••••••" required>
                 @error('password')
                            <p class="text-red-500">{{ $message }}</p>
                 @enderror
            </div>

            <div class="flex items-center justify-between">
                <label class="flex items-center">
                    <input type="checkbox" class="w-4 h-4 text-brand-600 border-gray-300 rounded focus:ring-brand-500">
                    <span class="ml-2 text-sm text-slate-600">Se souvenir de moi</span>
                </label>
                <a href="#" class="text-sm font-medium text-brand-600 hover:text-brand-500">Mot de passe oublié ?</a>
            </div>

            <button type="submit"
                class="w-full bg-brand-600 text-white font-semibold py-2.5 rounded-lg hover:bg-brand-700 transition-colors shadow-lg shadow-brand-500/30 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-500">
                Se connecter
            </button>
        </form>

        <div class="mt-8 pt-6 border-t border-gray-100 text-center">
            <a href="{{route('home')}}"
                class="text-sm text-slate-500 hover:text-brand-600 flex items-center justify-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                </svg>
                Retour au catalogue
            </a>
        </div>

    </div>

@endsection