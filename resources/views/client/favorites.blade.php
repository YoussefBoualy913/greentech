@extends('layouts.app')

@section('title','GreenTech Solutions - Mes Favoris')
    
@section('body-class','bg-gray-50 text-slate-800 font-sans antialiased flex flex-col min-h-screen')
    

@section('content')

    <!-- Navigation -->
    <nav class="bg-white sticky top-0 z-50 border-b border-gray-100 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center gap-2">
                    <a href="index.html" class="flex items-center gap-2">
                        <div class="w-8 h-8 rounded-lg bg-brand-600 flex items-center justify-center text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
                            </svg>
                        </div>
                        <span class="font-bold text-xl tracking-tight text-slate-900">GreenTech</span>
                    </a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="index.html" class="text-slate-500 hover:text-brand-600 transition-colors">Catalogue</a>
                    <a href="#" class="text-slate-500 hover:text-brand-600 transition-colors">À Propos</a>
                    <a href="#" class="text-slate-500 hover:text-brand-600 transition-colors">Contact</a>
                </div>

                <!-- Search & Cart -->
                <div class="flex items-center gap-4">
                    <div class="relative hidden sm:block">
                        <input type="text" placeholder="Rechercher une plante..."
                            class="pl-10 pr-4 py-2 border border-gray-200 rounded-full text-sm focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-transparent w-64 transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 text-gray-400 absolute left-3 top-1/2 transform -translate-y-1/2" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>

                    <!-- Favorites Link (Active) -->
                    <a href="favorites.html" class="text-brand-600 relative group" title="Mes Favoris">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                        </svg>
                    </a>

                    <a href="admin-login.html"
                        class="text-sm font-medium text-slate-500 hover:text-brand-600 flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                        </svg>
                        Admin
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 flex-1 w-full">

        <div class="mb-8">
            <h1 class="text-3xl font-extrabold text-slate-900">Mes Favoris</h1>
            <p class="text-slate-500 mt-2">Retrouvez ici tous vos produits coups de cœur.</p>
        </div>

        <!-- Favorites Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">

            <!-- Example Favorite 1 -->
            @foreach ($favorites as $favorite)
                
           
            <div
                class="group bg-white rounded-xl border border-gray-100 shadow-sm hover:shadow-lg transition-all duration-300 overflow-hidden flex flex-col relative">
                <button
                    class="absolute top-3 right-3 z-20 text-green-500 hover:text-green-600 hover:scale-110 transition-all bg-white rounded-full p-1.5 shadow-sm"
                    title="Retirer des favoris">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                        <path
                            d="m11.645 20.91-.007-.003-.022-.012a15.247 15.247 0 0 1-.383-.218 25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052 5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17 15.247 15.247 0 0 1-.383.219l-.022.012-.007.004-.003.001a.752.752 0 0 1-.704 0l-.003-.001Z" />
                    </svg>
                </button>
                <div class="relative h-64 overflow-hidden bg-gray-100">
                    <span
                        class="absolute top-3 left-3 bg-white/90 backdrop-blur text-xs font-bold px-2 py-1 rounded text-slate-700 shadow-sm z-10">{{$favorite->category->name}}</span>
                    <img src="{{$favorite->image_url}}"
                        alt="Monstera Deliciosa"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="p-5 flex-1 flex flex-col">
                    <h3 class="font-bold text-lg text-slate-900 mb-1">{{$favorite->name}}</h3>
                    <p class="text-sm text-slate-500 line-clamp-2 mb-4">{{$favorite->discription}}</p>
                    <div class="mt-auto flex items-center justify-between">
                        <span class="text-xl font-bold text-brand-600">{{$favorite->price}} €</span>
                        <a href="product-details.html"
                            class="inline-flex items-center justify-center p-2 rounded-lg bg-brand-50 text-brand-600 hover:bg-brand-600 hover:text-white transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
             @endforeach

            
           
               

        </div>

    </main>

    <!-- Footer -->
    <footer class="bg-slate-900 border-t border-slate-800 text-slate-300 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="col-span-1 md:col-span-1">
                    <div class="flex items-center gap-2 mb-4">
                        <div class="w-8 h-8 rounded-lg bg-brand-600 flex items-center justify-center text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
                            </svg>
                        </div>
                        <span class="font-bold text-xl tracking-tight text-white">GreenTech</span>
                    </div>
                    <p class="text-sm text-slate-400">Solutions écologiques pour un jardin durable et une maison saine.
                    </p>
                </div>
                <div>
                    <h4 class="font-bold text-white mb-4">Boutique</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-brand-400 transition-colors">Plantes</a></li>
                        <li><a href="#" class="hover:text-brand-400 transition-colors">Graines</a></li>
                        <li><a href="#" class="hover:text-brand-400 transition-colors">Outils</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold text-white mb-4">Support</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-brand-400 transition-colors">FAQ</a></li>
                        <li><a href="#" class="hover:text-brand-400 transition-colors">Livraison</a></li>
                        <li><a href="#" class="hover:text-brand-400 transition-colors">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold text-white mb-4">Newsletter</h4>
                    <form class="flex gap-2">
                        <input type="email" placeholder="Votre email"
                            class="bg-slate-800 border-slate-700 text-white rounded-lg px-3 py-2 text-sm w-full focus:ring-1 focus:ring-brand-500 focus:outline-none">
                        <button
                            class="bg-brand-600 text-white px-3 py-2 rounded-lg hover:bg-brand-500 transition-colors">OK</button>
                    </form>
                </div>
            </div>
            <div class="border-t border-slate-800 mt-12 pt-8 text-center text-sm text-slate-500">
                &copy; 2026 GreenTech Solutions. Tous droits réservés.
            </div>
        </div>
    </footer>

@endsection