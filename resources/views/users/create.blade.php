@extends('layouts.app')

@section('title','Ajouter un Utilisateur - Administration GreenTech')
    
@section('body-class','bg-gray-50 font-sans antialiased flex h-screen overflow-hidden')
    

@section('content')

    <!-- Sidebar -->
    <aside class="w-64 bg-slate-900 border-r border-slate-800 hidden lg:flex flex-col">
        <div class="h-16 flex items-center px-6 border-b border-slate-800">
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 rounded-lg bg-brand-600 flex items-center justify-center text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
                    </svg>
                </div>
                <span class="font-bold text-xl tracking-tight text-white">GreenTech</span>
            </div>
        </div>

        <nav class="flex-1 p-4 space-y-1 overflow-y-auto">
            <a href="{{ route('products.index') }}"
                class="flex items-center px-4 py-2 text-slate-400 rounded-lg hover:bg-slate-800 hover:text-white transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5 mr-3">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
                Dashboard
            </a>
            <a href="{{ route('products.create') }}" class="flex items-center px-4 py-2 text-slate-400 rounded-lg hover:bg-slate-800 hover:text-white transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-3">
               <path stroke-linecap="round" stroke-linejoin="round"
                  d="M12 4.5v15m7.5-7.5h-15" />
            </svg>

                Produits
            </a>
            <a href="{{ route('users.index') }}" class="flex items-center px-4 py-2 bg-brand-600 text-white rounded-lg shadow-sm">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5 mr-3">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                </svg>
                Utilisateurs
            </a>
             <a href="{{ route('roles.index') }}" class="flex items-center px-4 py-2 text-slate-400 rounded-lg hover:bg-slate-800 hover:text-white transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5 mr-3">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z" />
                </svg>
                Rôles
            </a>
            <a href="{{ route('home') }}"
                class="flex items-center px-4 py-2 text-slate-400 rounded-lg hover:bg-slate-800 hover:text-white transition-colors">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
               stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-3">
               <path stroke-linecap="round" stroke-linejoin="round"
                d="M15 19l-7-7 7-7" />
              </svg>


                catalogue
            </a>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 flex flex-col overflow-hidden">

        <!-- Header -->
        <header class="h-16 bg-white border-b border-gray-100 flex items-center justify-between px-8">
            <h2 class="text-xl font-bold text-slate-800">Ajouter un utilisateur</h2>
            <div class="flex items-center gap-4">
                <a href="{{ route('users.index') }}" class="text-sm font-medium text-slate-500 hover:text-slate-700">Annuler</a>
            </div>
        </header>

        <!-- Content Scrollable -->
        <div class="flex-1 overflow-auto p-8">
            <div class="max-w-3xl mx-auto">

                <form action="{{$route}}" method="POST" class="bg-white p-8 rounded-xl border border-gray-100 shadow-sm space-y-6">
                  @csrf
                  @method($method)
                    <div class="grid grid-cols-1 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-slate-700 mb-1">Nom complet</label>
                            <input type="text" id="name" name="name" value ="{{ $user->name ?? '' }}"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-500 focus:border-brand-500 outline-none transition-all placeholder-gray-400"
                                placeholder="Ex: Alice Laurent">
                            @error('name')
                                   <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-slate-700 mb-1">Adresse
                                Email</label>
                            <input type="email" id="email" name="email" value = '{{ $user->email ?? '' }}'
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-500 focus:border-brand-500 outline-none transition-all placeholder-gray-400"
                                placeholder="Ex: alice.laurent@example.com">
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

                        <div>
                           <label for="confirm_password" class="block text-sm font-medium text-slate-700 mb-1">Confirmer le mot de passe</label>
                           <input type="password" id="confirm_password" name="password_confirmation"
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-500 focus:border-brand-500 outline-none transition-all placeholder-gray-400"
                                   placeholder="••••••••" required>
                            @error('password_confirmation')
                                   <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>


                        <div>
                            <label for="role" class="block text-sm font-medium text-slate-700 mb-1">Rôle</label>
                            <select id="role" name="role"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-500 focus:border-brand-500 outline-none transition-all bg-white">
                                  @foreach($roles as $role)
                                    <option value="{{ $role->name }}" {{ $user?->hasRole($role->name) ? 'selected' : '' }}>
                                    {{ $role->name }}
                                    </option>
                                    @endforeach

                            </select>
                            <p class="mt-1 text-xs text-slate-500">
                                <strong>Admin:</strong> Accès complet.
                                <strong>Éditeur:</strong> Peut modifier le contenu.
                                <strong>Gestionnaire:</strong> Peut gérer les commandes et le stock.
                            </p>
                        </div>
                    </div>

                    <div class="pt-6 border-t border-gray-100 flex justify-end gap-4">
                        <a href="{{ route('products.index') }}"
                            class="px-6 py-2.5 rounded-lg border border-gray-300 text-slate-700 font-medium hover:bg-gray-50 transition-colors">Annuler</a>
                        <button type="submit"
                            class="px-6 py-2.5 rounded-lg bg-brand-600 text-white font-medium hover:bg-brand-700 transition-colors shadow-lg shadow-brand-500/30">Créer
                            l'utilisateur</button>
                    </div>

                </form>

            </div>
        </div>
    </main>
@endsection