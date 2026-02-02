@extends('layouts.app')

@section('title','Administration - GreenTech Solution')
    
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
            <a href="#"
                class="flex items-center px-4 py-2 text-slate-400 rounded-lg hover:bg-slate-800 hover:text-white transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5 mr-3">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
                Dashboard
            </a>
            <a href="#" class="flex items-center px-4 py-2 bg-brand-600 text-white rounded-lg shadow-sm">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5 mr-3">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5m8.25 3v6.75m0 0l-3-3m3 3l3-3M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                </svg>
                Produits
            </a>
            <a href="#"
                class="flex items-center px-4 py-2 text-slate-400 rounded-lg hover:bg-slate-800 hover:text-white transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5 mr-3">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.212 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                Paramètres
            </a>
        </nav>

        <div class="p-4 border-t border-slate-800">
            <a href="{{route('visiteur.index')}}"
                class="flex items-center px-4 py-2 text-slate-400 rounded-lg hover:bg-slate-800 hover:text-white transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5 mr-3">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                </svg>
                Déconnexion
            </a>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 flex flex-col overflow-hidden">

        <!-- Header -->
        <header class="h-16 bg-white border-b border-gray-100 flex items-center justify-between px-8">
            <h2 class="text-xl font-bold text-slate-800">Gestion des Stocks</h2>
            <div class="flex items-center gap-4">
                <span class="text-sm font-medium text-slate-600">Admin User</span>
                <div
                    class="w-8 h-8 rounded-full bg-brand-100 flex items-center justify-center text-brand-700 font-bold">
                    AU
                </div>
            </div>
        </header>

        <!-- Content Scrollable -->
        <div class="flex-1 overflow-auto p-8">

            <div class="flex justify-between items-center mb-6">
                <div class="relative">
                    <input type="text" placeholder="Rechercher..."
                        class="pl-10 pr-4 py-2 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-transparent w-64">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 text-gray-400 absolute left-3 top-1/2 transform -translate-y-1/2" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <a href="{{ route('products.create')}}"
                    class="bg-brand-600 text-white px-4 py-2 rounded-lg text-sm font-semibold hover:bg-brand-700 transition-colors flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    Nouveau Produit
                </a>
            </div>

            <div class="bg-white rounded-xl border border-gray-100 shadow-sm overflow-hidden">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-50 text-slate-600 text-xs uppercase tracking-wider border-b border-gray-200">
                            <th class="px-6 py-4 font-semibold">Produit</th>
                            <th class="px-6 py-4 font-semibold">Catégorie</th>
                            <th class="px-6 py-4 font-semibold">Prix</th>
                            <th class="px-6 py-4 font-semibold">Stock</th>
                            <th class="px-6 py-4 font-semibold text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        <!-- Row 1 -->
                        @foreach ($products as  $product)
                            
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-4">
                                    <img src="{{$product->image_url}}"
                                    alt="" class="w-10 h-10 rounded-lg object-cover">
                                    <div>
                                        <div class="font-medium text-slate-900">{{$product->name}}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <span
                                class="bg-green-100 text-green-700 text-xs font-semibold px-2.5 py-0.5 rounded border border-green-200">{{$product->category->name}}</span>
                            </td>
                            <td class="px-6 py-4 text-slate-600 font-medium">{{$product->price}} €</td>
                            <td class="px-6 py-4">
                                <span class="text-slate-600">{{$product->stock}}</span>
                            </td>
                            <td class="px-6 py-4 text-right flex space-x-2">
                                <a href="{{route('products.edit',$product->id)}}"
                                class="text-amber-700 hover:text-brand-800 font-medium text-sm">Éditer</a>
                                <form action="{{route('products.destroy',$product->id)}}" method="POST"  onsubmit="return confirm('Supprimer ce produit ?')">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="text-red-500 hover:text-red-700 font-medium text-sm">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                        {{-- <!-- Row 2 -->
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-4">
                                    <img src="https://images.unsplash.com/photo-1598282361138-b6ec72b4f2c0?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80"
                                        alt="" class="w-10 h-10 rounded-lg object-cover">
                                    <div>
                                        <div class="font-medium text-slate-900">Sécateur Pro</div>
                                        <div class="text-xs text-slate-500">Ref: TLS-042</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <span
                                    class="bg-amber-100 text-amber-700 text-xs font-semibold px-2.5 py-0.5 rounded border border-amber-200">Outils</span>
                            </td>
                            <td class="px-6 py-4 text-slate-600 font-medium">14.50 €</td>
                            <td class="px-6 py-4">
                                <span class="text-slate-600">12</span>
                            </td>
                            <td class="px-6 py-4 text-right space-x-2">
                                <a href="admin-product-form.html"
                                    class="text-brand-600 hover:text-brand-800 font-medium text-sm">Éditer</a>
                                <button class="text-red-500 hover:text-red-700 font-medium text-sm">Supprimer</button>
                            </td>
                        </tr> --}}

                        <!-- Row 3 -->
                        {{-- <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-4">
                                    <img src="https://images.unsplash.com/photo-1599598425947-d35275e7a9b0?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80"
                                        alt="" class="w-10 h-10 rounded-lg object-cover grayscale opacity-70">
                                    <div>
                                        <div class="font-medium text-slate-900 text-opacity-70">Pilea Peperomioides
                                        </div>
                                        <div class="text-xs text-slate-500">Ref: PL-005</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <span
                                    class="bg-green-100 text-green-700 text-xs font-semibold px-2.5 py-0.5 rounded border border-green-200">Plantes</span>
                            </td>
                            <td class="px-6 py-4 text-slate-600 font-medium text-opacity-70">12.00 €</td>
                            <td class="px-6 py-4">
                                <span
                                    class="bg-red-100 text-red-700 text-xs font-semibold px-2.5 py-0.5 rounded border border-red-200">Rupture</span>
                            </td>
                            <td class="px-6 py-4 text-right space-x-2">
                                <a href="admin-product-form.html"
                                    class="text-brand-600 hover:text-brand-800 font-medium text-sm">Éditer</a>
                                <button class="text-red-500 hover:text-red-700 font-medium text-sm">Supprimer</button>
                            </td>
                        </tr> --}}
                    </tbody>
                </table>
                <div class="px-6 py-4 border-t border-gray-100 flex items-center justify-between">
                    <span class="text-sm text-slate-500">Affichage de {{ $products->currentPage() }} sur {{ $products->lastPage() }} page </span>
                    <span class="text-sm text-slate-500">Total  {{ $products->total() }} produits</span>
                    <div class="flex gap-1">
                         @if ($products->onFirstPage())
                        <button  class="px-3 py-1 border border-gray-200 rounded text-sm disabled:opacity-50"
                            disabled>Précédent</button>
                        @else
                         <a href="{{ $products->previousPageUrl() }}" class="px-3 py-1 border border-gray-200 rounded text-sm "
                            >Précédent</a>
                        @endif
                        @if($products->hasMorePages())
                        <a href="{{ $products->nextPageUrl() }}" class="px-3 py-1 border border-gray-200 rounded text-sm hover:bg-gray-50">Suivant</a>
                        @else
                        <button  class="px-3 py-1 border border-gray-200 rounded text-sm disabled:opacity-50"
                            disabled>Suivant</button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection