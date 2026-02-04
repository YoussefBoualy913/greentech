@extends('layouts.app')

@section('title','Inscription - GreenTech Solutions')
    
@section('body-class','bg-gray-50 font-sans antialiased min-h-screen flex items-center justify-center py-12')
    

@section('content')

    <div class="w-full max-w-md bg-white p-8 rounded-2xl shadow-xl border border-gray-100">

        <div class="text-center mb-8">
            <div
                class="inline-flex items-center justify-center w-12 h-12 rounded-xl bg-brand-600 text-white mb-4 shadow-lg shadow-brand-500/30">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
                </svg>
            </div>
            <h1 class="text-2xl font-bold text-slate-900 tracking-tight">Créer un compte</h1>
            <p class="text-slate-500 mt-2 text-sm">Rejoignez GreenTech Solutions aujourd'hui.</p>
        </div>

        <form action="{{ route('register.store') }}" method="POST" class="space-y-6">
            @csrf
            <div>
                <label for="fullname" class="block text-sm font-medium text-slate-700 mb-1">Nom complet</label>
                <input type="text" id="fullname" name="name"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-500 focus:border-brand-500 outline-none transition-all placeholder-gray-400"
                    placeholder="Jean Dupont" required>
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-slate-700 mb-1">Adresse Email</label>
                <input type="email" id="email" name="email"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-500 focus:border-brand-500 outline-none transition-all placeholder-gray-400"
                    placeholder="jean.dupont@example.com" required>
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-slate-700 mb-1">Mot de passe</label>
                <input type="password" id="password" name="password"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-500 focus:border-brand-500 outline-none transition-all placeholder-gray-400"
                    placeholder="••••••••" required>
            </div>

            <div>
                <label for="confirm_password" class="block text-sm font-medium text-slate-700 mb-1">Confirmer le mot de passe</label>
                <input type="password" id="confirm_password" name="password_confirmation"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-500 focus:border-brand-500 outline-none transition-all placeholder-gray-400"
                    placeholder="••••••••" required>
            </div>

            <div class="flex items-center">
                <input type="checkbox" id="terms" name="terms" required
                    class="w-4 h-4 text-brand-600 border-gray-300 rounded focus:ring-brand-500">
                <label for="terms" class="ml-2 text-sm text-slate-600">
                    J'accepte les <a href="#" class="text-brand-600 hover:underline">conditions d'utilisation</a>
                </label>
            </div>

            <button type="submit"
                class="w-full bg-brand-600 text-white font-semibold py-2.5 rounded-lg hover:bg-brand-700 transition-colors shadow-lg shadow-brand-500/30 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-500">
                S'inscrire
            </button>
        </form>

        <div class="mt-6 pt-6 border-t border-gray-100 text-center">
            <p class="text-sm text-slate-500 mb-4">
                Déjà un compte ? 
                <a href="{{ route('auth.create') }}" class="font-medium text-brand-600 hover:text-brand-500">Se connecter</a>
            </p>
            <a href="{{ route('home') }}"
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


