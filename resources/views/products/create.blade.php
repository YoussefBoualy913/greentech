@extends('layouts.app')

@section('title','Ajouter un Produit - Administration')
    
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
            <a href="admin-dashboard.html"
                class="flex items-center px-4 py-2 text-slate-400 rounded-lg hover:bg-slate-800 hover:text-white transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5 mr-3">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
                Dashboard
            </a>
            <a href="admin-dashboard.html"
                class="flex items-center px-4 py-2 bg-brand-600 text-white rounded-lg shadow-sm">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5 mr-3">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5m8.25 3v6.75m0 0l-3-3m3 3l3-3M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                </svg>
                Produits
            </a>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 flex flex-col overflow-hidden">

        <!-- Header -->
        <header class="h-16 bg-white border-b border-gray-100 flex items-center justify-between px-8">
            <h2 class="text-xl font-bold text-slate-800">Ajouter un produit</h2>
            <div class="flex items-center gap-4">
                <a href="{{route('products.index')}}"
                    class="text-sm font-medium text-slate-500 hover:text-slate-700">Annuler</a>
            </div>
        </header>

        <!-- Content Scrollable -->
        <div class="flex-1 overflow-auto p-8">
            <div class="max-w-3xl mx-auto">

                <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data"
                    class="bg-white p-8 rounded-xl border border-gray-100 shadow-sm space-y-6">
                @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="col-span-1 md:col-span-2">
                            <label for="name" class="block text-sm font-medium text-slate-700 mb-1">Nom du
                                produit</label>
                            <input type="text" id="name" name="name"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-500 focus:border-brand-500 outline-none transition-all placeholder-gray-400"
                                placeholder="Ex: Monstera Deliciosa">
                        </div>

                        <div>
                            <label for="price" class="block text-sm font-medium text-slate-700 mb-1">Prix (€)</label>
                            <input type="number" step="0.01" id="price" name="price"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-500 focus:border-brand-500 outline-none transition-all placeholder-gray-400"
                                placeholder="0.00">
                        </div>

                        <div>
                            <label for="stock" class="block text-sm font-medium text-slate-700 mb-1">Stock</label>
                            <input type="number" id="stock" name="stock"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-500 focus:border-brand-500 outline-none transition-all placeholder-gray-400"
                                placeholder="0">
                        </div>

                        <div class="col-span-1 md:col-span-2">
                            <label for="category"
                                class="block text-sm font-medium text-slate-700 mb-1">Catégorie</label>
                            <select id="category" name="categoryname"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-500 focus:border-brand-500 outline-none transition-all bg-white">
                                <option value="" disabled selected>Choisir une catégorie</option>
                                <option value="Plantes">Plantes</option>
                                <option value="Graines">Graines</option>
                                <option value="Gutils">Outils</option>
                            </select>
                        </div>

                        <div class="col-span-1 md:col-span-2">
                            <label for="description"
                                class="block text-sm font-medium text-slate-700 mb-1">Description</label>
                            <textarea id="description" name="description" rows="4"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-500 focus:border-brand-500 outline-none transition-all placeholder-gray-400"
                                placeholder="Description détaillée du produit..."></textarea>
                        </div>

                        <div class="col-span-1 md:col-span-2">
                            <label class="block text-sm font-medium text-slate-700 mb-1">Image du produit</label>
                            <div
                                class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-lg hover:bg-gray-50 transition-colors cursor-pointer">
                                <div class="space-y-1 text-center">
                                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                                        viewBox="0 0 48 48" aria-hidden="true">
                                        <path
                                            d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <div class="flex text-sm text-gray-600">
                                        <label for="file-upload"
                                            class="relative cursor-pointer bg-white rounded-md font-medium text-brand-600 hover:text-brand-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-brand-500">
                                            <span>Télécharger un fichier</span>
                                            <input id="file-upload" name="image" type="file" class="sr-only">
                                        </label>
                                        <p class="pl-1">ou glisser-déposer</p>
                                    </div>
                                    <p class="text-xs text-gray-500">PNG, JPG, GIF jusqu'à 10MB</p>
                                     @error('image')
                                      <p class="text-red-500">{{ $message }}</p>
                                      @enderror
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="pt-6 border-t border-gray-100 flex justify-end gap-4">
                        <a href="admin-dashboard.html"
                            class="px-6 py-2.5 rounded-lg border border-gray-300 text-slate-700 font-medium hover:bg-gray-50 transition-colors">Annuler</a>
                        <button type="submit" name="submit"
                            class="px-6 py-2.5 rounded-lg bg-brand-600 text-white font-medium hover:bg-brand-700 transition-colors shadow-lg shadow-brand-500/30">Enregistrer</button>
                    </div>

                </form>

            </div>
        </div>
    </main>

@endsection