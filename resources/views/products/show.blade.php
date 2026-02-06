@extends('layouts.app')

@section('title','Administration - GreenTech Solution')
    
@section('body-class','bg-gray-50 text-slate-800 font-sans antialiased')
    

@section('content')


    <!-- Navigation -->
    <nav class="bg-white sticky top-0 z-50 border-b border-gray-100 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <a href="{{ route('home') }}" class="flex-shrink-0 flex items-center gap-2">
                    <div class="w-8 h-8 rounded-lg bg-brand-600 flex items-center justify-center text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
                        </svg>
                    </div>
                    <span class="font-bold text-xl tracking-tight text-slate-900">GreenTech</span>
                </a>

                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="text-slate-500 hover:text-brand-600 transition-colors">Catalogue</a>
                    <a href="#" class="text-slate-500 hover:text-brand-600 transition-colors">À Propos</a>
                    <a href="#" class="text-slate-500 hover:text-brand-600 transition-colors">Contact</a>
                </div>

                <div class="flex items-center gap-4">
                    @guest
                    
                    <a href="{{ route('register.create') }}" class="text-sm font-medium text-slate-500 hover:text-brand-600 flex items-center gap-1">
                        S'inscrire
                    </a>
                    <a href="{{ route('auth.create') }}" class="bg-brand-600 text-white px-4 py-2 rounded-lg text-sm font-semibold hover:bg-brand-700 transition-colors flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                        </svg>
                        connecxion
                    </a>
                    @endguest
                    @auth
                        @if (auth()->user()->role === "admin")
                        
                        <a href="{{ route('products.index') }}" class="bg-brand-600 text-white px-4 py-2 rounded-lg text-sm font-semibold hover:bg-brand-700 transition-colors flex items-center gap-2">
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                 <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                              </svg>
                        dashboard
                        </a>
                        @endif

                        @if (auth()->user()->role === "client")
                         <a href="{{route('auth.logout')}}"
                              class="flex items-center px-4 py-2 text-slate-400 rounded-lg hover:bg-slate-800 hover:text-white transition-colors">
                             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                              stroke="currentColor" class="w-5 h-5 mr-3">
                            <path stroke-linecap="round" stroke-linejoin="round"
                               d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                             </svg>
                             Déconnexion
                         </a>
        
                        @endif
                    @endauth
                   
                </div>
            </div>
        </div>
    </nav>

    <!-- Breadcrumb -->
    <div class="bg-gray-50 border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3">
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="{{ route('home') }}"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-brand-600">
                            Catalogue
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <a href="{{ route('home') }}"
                                class="ml-1 text-sm font-medium text-gray-700 hover:text-brand-600 md:ml-2">{{$product->category->name}}</a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">{{$product->name}}</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="grid grid-cols-1 lg:grid-cols-2">

                <!-- Product Image -->
                <div class="relative bg-gray-100 h-96 lg:h-auto">
                    <img src="{{$product->image_url}}"
                        alt="{{$product->name}}" class="w-full h-full object-cover">
                    <div class="absolute top-4 left-4">
                        <span
                            class="bg-white/90 backdrop-blur text-sm font-bold px-3 py-1.5 rounded-full text-slate-800 shadow-sm">
                            {{$product->category->name}}
                        </span>
                    </div>
                </div>

                <!-- Product Info -->
                <div class="p-8 lg:p-12 flex flex-col justify-center">
                    <div class="mb-2 flex items-center gap-2">
                        <span
                            class="bg-green-100 text-green-700 text-xs font-semibold px-2.5 py-0.5 rounded border border-green-200">En
                            stock</span>
                        <span class="text-sm text-gray-500">{{$product->stock}}</span>
                    </div>

                    <h1 class="text-3xl lg:text-4xl font-extrabold text-slate-900 mb-4">{{$product->name}}</h1>

                    <div class="mb-6">
                        <p class="text-3xl font-bold text-brand-600">{{$product->price}}€</p>
                    </div>

                    <div class="prose prose-slate mb-8">
                        <p class="text-slate-600 leading-relaxed">
                           {{$product->description}}
                        </p>
                        
                    </div>

                    <div class="border-t border-gray-100 pt-8 mt-auto">
                        <div class="flex gap-4">
                            <button
                                class="flex-1 bg-brand-600 text-white font-semibold py-3 px-6 rounded-lg hover:bg-brand-700 transition-colors shadow-lg shadow-brand-500/30 flex items-center justify-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" class="size-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                                </svg>
                                Ajouter au panier (Demo)
                            </button>
                            <button
                                class="p-3 rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-50 hover:text-red-500 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                </svg>
                            </button>
                        </div>
                        <p class="text-xs text-gray-400 mt-3 text-center">Livraison estimée sous 2 à 4 jours ouvrés.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Similar Products -->
        <div class="mt-16">
            <h2 class="text-2xl font-bold text-slate-900 mb-8">Vous aimerez aussi</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Product Card (Compact) -->
                <div
                    class="group bg-white rounded-xl border border-gray-100 shadow-sm hover:shadow-md transition-all duration-300">
                    <div class="relative h-48 overflow-hidden rounded-t-xl bg-gray-100">
                        <img src="https://images.unsplash.com/photo-1599598425947-d35275e7a9b0?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                            alt="Pilea" class="w-full h-full object-cover">
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-slate-900 text-sm mb-1">Pilea Peperomioides</h3>
                        <p class="font-bold text-brand-600 text-lg">12.00 €</p>
                        <a href="#"
                            class="mt-3 block w-full py-2 bg-gray-50 text-brand-600 text-sm font-semibold text-center rounded-lg hover:bg-brand-600 hover:text-white transition-colors">Voir</a>
                    </div>
                </div>
                <!-- Product Card (Compact) -->
                <div
                    class="group bg-white rounded-xl border border-gray-100 shadow-sm hover:shadow-md transition-all duration-300">
                    <div class="relative h-48 overflow-hidden rounded-t-xl bg-gray-100">
                        <img src="https://images.unsplash.com/photo-1523301343968-63248330067f?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                            alt="Graines" class="w-full h-full object-cover">
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-slate-900 text-sm mb-1">Graines de Basilic</h3>
                        <p class="font-bold text-brand-600 text-lg">3.95 €</p>
                        <a href="#"
                            class="mt-3 block w-full py-2 bg-gray-50 text-brand-600 text-sm font-semibold text-center rounded-lg hover:bg-brand-600 hover:text-white transition-colors">Voir</a>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <!-- Footer -->
    <footer class="bg-slate-900 border-t border-slate-800 text-slate-300 py-12 mt-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center">
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
                <div class="text-sm text-slate-500">
                    &copy; 2026 GreenTech Solutions.
                </div>
            </div>
        </div>
    </footer>

@endsection