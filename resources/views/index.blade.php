<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GreenTech Solutions - Catalogue</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            50: '#ecfdf5',
                            100: '#d1fae5',
                            500: '#10b981',
                            600: '#059669',
                            700: '#047857',
                            900: '#064e3b',
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50 text-slate-800 font-sans antialiased">

    <!-- Navigation -->
    <nav class="bg-white sticky top-0 z-50 border-b border-gray-100 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center gap-2">
                    <div class="w-8 h-8 rounded-lg bg-brand-600 flex items-center justify-center text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
                        </svg>
                    </div>
                    <span class="font-bold text-xl tracking-tight text-slate-900">GreenTech</span>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="index.html" class="text-brand-600 font-medium">Catalogue</a>
                    <a href="#" class="text-slate-500 hover:text-brand-600 transition-colors">À Propos</a>
                    <a href="#" class="text-slate-500 hover:text-brand-600 transition-colors">Contact</a>
                </div>

                <!-- Search & Cart -->
                <div class="flex items-center gap-4">
                    
                    <a href="{{route('products.index')}}" class="text-sm font-medium text-slate-500 hover:text-brand-600 flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                        </svg>
                        Admin
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="relative bg-brand-900 overflow-hidden">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1466692476868-aef1dfb1e735?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" alt="Plantes" class="w-full h-full object-cover opacity-20">
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 lg:py-32">
            <h1 class="text-4xl lg:text-5xl font-extrabold tracking-tight text-white mb-6">
                Cultivez votre jardin <br>d'intérieur.
            </h1>
            <p class="mt-4 text-xl text-brand-100 max-w-2xl">
                Découvrez notre sélection de plantes, graines et outils pour rendre votre espace plus vert et plus sain.
            </p>
        </div>
    </div>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="flex flex-col lg:flex-row gap-8">
            
            <!-- Sidebar Filters -->
            <aside class="w-full lg:w-64 flex-shrink-0">
                <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm sticky top-24">
                    <h3 class="font-bold text-slate-900 mb-4 text-lg">Catégories</h3>
                    <ul class="space-y-2">
                        <li>
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input type="checkbox" class="w-4 h-4 text-brand-600 rounded border-gray-300 focus:ring-brand-500">
                                <span class="text-slate-600 group-hover:text-brand-600 transition-colors">Plantes (12)</span>
                            </label>
                        </li>
                        <li>
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input type="checkbox" class="w-4 h-4 text-brand-600 rounded border-gray-300 focus:ring-brand-500">
                                <span class="text-slate-600 group-hover:text-brand-600 transition-colors">Graines (8)</span>
                            </label>
                        </li>
                        <li>
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input type="checkbox" class="w-4 h-4 text-brand-600 rounded border-gray-300 focus:ring-brand-500">
                                <span class="text-slate-600 group-hover:text-brand-600 transition-colors">Outils (5)</span>
                            </label>
                        </li>
                    </ul>

                    <div class="border-t border-gray-100 my-6"></div>

                    <h3 class="font-bold text-slate-900 mb-4 text-lg">Prix</h3>
                    <div class="flex items-center gap-2">
                        <input type="number" placeholder="Min" class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-brand-500 focus:outline-none">
                        <span class="text-gray-400">-</span>
                        <input type="number" placeholder="Max" class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-brand-500 focus:outline-none">
                    </div>
                </div>
            </aside>

            <!-- Product Grid -->
            <section class="flex-1">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-bold text-slate-900">Nos Produits</h2>
                     <div class="relative hidden sm:block">
                        <input type="text" placeholder="Rechercher une plante..." class="pl-10 pr-4 py-2 border border-gray-200 rounded-full text-sm focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-transparent w-64 transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 absolute left-3 top-1/2 transform -translate-y-1/2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                        <a href=""
                           class="bg-brand-600 text-white px-4 py-2 rounded-lg text-sm font-semibold hover:bg-brand-700 transition-colors flex items-center gap-2">

                           Rechercher
                        </a>
                    <select class="border-gray-200 border rounded-lg px-3 py-2 text-sm focus:ring-brand-500 focus:border-brand-500">
                        <option>Trier par popularité</option>
                        <option>Prix croissant</option>
                        <option>Prix décroissant</option>
                    </select>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    
                    <!-- Product Card 1 -->
                    <div class="group bg-white rounded-xl border border-gray-100 shadow-sm hover:shadow-lg transition-all duration-300 overflow-hidden flex flex-col">
                        <div class="relative h-64 overflow-hidden bg-gray-100">
                            <span class="absolute top-3 left-3 bg-white/90 backdrop-blur text-xs font-bold px-2 py-1 rounded text-slate-700 shadow-sm z-10">Plantes</span>
                            <img src="https://images.unsplash.com/photo-1485955900006-10f4d324d411?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Monstera Deliciosa" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-5 flex-1 flex flex-col">
                            <h3 class="font-bold text-lg text-slate-900 mb-1">Monstera Deliciosa</h3>
                            <p class="text-sm text-slate-500 line-clamp-2 mb-4">Une plante d'intérieur emblématique avec de grandes feuilles perforées.</p>
                            <div class="mt-auto flex items-center justify-between">
                                <span class="text-xl font-bold text-brand-600">29.99 €</span>
                                <a href="product-details.html" class="inline-flex items-center justify-center p-2 rounded-lg bg-brand-50 text-brand-600 hover:bg-brand-600 hover:text-white transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Product Card 2 -->
                    <div class="group bg-white rounded-xl border border-gray-100 shadow-sm hover:shadow-lg transition-all duration-300 overflow-hidden flex flex-col">
                        <div class="relative h-64 overflow-hidden bg-gray-100">
                            <span class="absolute top-3 left-3 bg-white/90 backdrop-blur text-xs font-bold px-2 py-1 rounded text-slate-700 shadow-sm z-10">Outils</span>
                            <img src="https://images.unsplash.com/photo-1598282361138-b6ec72b4f2c0?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Sécateur Pro" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-5 flex-1 flex flex-col">
                            <h3 class="font-bold text-lg text-slate-900 mb-1">Sécateur Pro</h3>
                            <p class="text-sm text-slate-500 line-clamp-2 mb-4">Lame en acier carbone pour une coupe nette et précise.</p>
                            <div class="mt-auto flex items-center justify-between">
                                <span class="text-xl font-bold text-brand-600">14.50 €</span>
                                <a href="product-details.html" class="inline-flex items-center justify-center p-2 rounded-lg bg-brand-50 text-brand-600 hover:bg-brand-600 hover:text-white transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Product Card 3 -->
                    <div class="group bg-white rounded-xl border border-gray-100 shadow-sm hover:shadow-lg transition-all duration-300 overflow-hidden flex flex-col">
                        <div class="relative h-64 overflow-hidden bg-gray-100">
                            <span class="absolute top-3 left-3 bg-white/90 backdrop-blur text-xs font-bold px-2 py-1 rounded text-slate-700 shadow-sm z-10">Graines</span>
                            <img src="https://images.unsplash.com/photo-1523301343968-63248330067f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Graines de Basilic" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-5 flex-1 flex flex-col">
                            <h3 class="font-bold text-lg text-slate-900 mb-1">Graines de Basilic</h3>
                            <p class="text-sm text-slate-500 line-clamp-2 mb-4">Sachet de 50 graines de Basilic Grand Vert, bio et reproductibles.</p>
                            <div class="mt-auto flex items-center justify-between">
                                <span class="text-xl font-bold text-brand-600">3.95 €</span>
                                <a href="product-details.html" class="inline-flex items-center justify-center p-2 rounded-lg bg-brand-50 text-brand-600 hover:bg-brand-600 hover:text-white transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                     <!-- Product Card 4 -->
                     <div class="group bg-white rounded-xl border border-gray-100 shadow-sm hover:shadow-lg transition-all duration-300 overflow-hidden flex flex-col">
                        <div class="relative h-64 overflow-hidden bg-gray-100">
                            <span class="absolute top-3 left-3 bg-white/90 backdrop-blur text-xs font-bold px-2 py-1 rounded text-slate-700 shadow-sm z-10">Plantes</span>
                            <div class="absolute top-3 right-3 bg-red-100 text-red-600 text-xs font-bold px-2 py-1 rounded shadow-sm z-10">Rupture</div>
                            <img src="https://images.unsplash.com/photo-1599598425947-d35275e7a9b0?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Pilea Peperomioides" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500 opacity-80 hover:opacity-100">
                        </div>
                        <div class="p-5 flex-1 flex flex-col">
                            <h3 class="font-bold text-lg text-slate-900 mb-1">Pilea Peperomioides</h3>
                            <p class="text-sm text-slate-500 line-clamp-2 mb-4">Plante à monnaie chinoise, facile à bouturer.</p>
                            <div class="mt-auto flex items-center justify-between">
                                <span class="text-xl font-bold text-slate-400">12.00 €</span>
                                <button disabled class="inline-flex items-center justify-center p-2 rounded-lg bg-gray-100 text-gray-400 cursor-not-allowed">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Pagination -->
                <div class="mt-12 flex justify-center">
                    <nav class="flex items-center gap-2" aria-label="Pagination">
                        <a href="#" class="p-2 rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-50 disabled:opacity-50">
                            <span class="sr-only">Précédent</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-lg bg-brand-600 text-white font-medium">1</a>
                        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-200 text-slate-600 hover:bg-gray-50 font-medium">2</a>
                        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-200 text-slate-600 hover:bg-gray-50 font-medium">3</a>
                        <a href="#" class="p-2 rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-50">
                            <span class="sr-only">Suivant</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </nav>
                </div>

            </section>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-slate-900 border-t border-slate-800 text-slate-300 py-12">
         <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="col-span-1 md:col-span-1">
                     <div class="flex items-center gap-2 mb-4">
                        <div class="w-8 h-8 rounded-lg bg-brand-600 flex items-center justify-center text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
                            </svg>
                        </div>
                        <span class="font-bold text-xl tracking-tight text-white">GreenTech</span>
                    </div>
                    <p class="text-sm text-slate-400">Solutions écologiques pour un jardin durable et une maison saine.</p>
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
                        <input type="email" placeholder="Votre email" class="bg-slate-800 border-slate-700 text-white rounded-lg px-3 py-2 text-sm w-full focus:ring-1 focus:ring-brand-500 focus:outline-none">
                        <button class="bg-brand-600 text-white px-3 py-2 rounded-lg hover:bg-brand-500 transition-colors">OK</button>
                    </form>
                </div>
            </div>
            <div class="border-t border-slate-800 mt-12 pt-8 text-center text-sm text-slate-500">
                &copy; 2026 GreenTech Solutions. Tous droits réservés.
            </div>
         </div>
    </footer>

</body>
</html>
