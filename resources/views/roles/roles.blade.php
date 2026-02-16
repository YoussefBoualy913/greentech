@extends('layouts.app')

@section('title','Gestion des Rôles - Administration GreenTech')
    
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
              <a href="{{ route('users.index') }}" class="flex items-center px-4 py-2 text-slate-400 rounded-lg hover:bg-slate-800 hover:text-white transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5 mr-3">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                </svg>
                Utilisateurs
            </a>
             <a href="{{ route('roles.index') }}" class="flex items-center px-4 py-2 bg-brand-600 text-white rounded-lg shadow-sm">
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

        <div class="p-4 border-t border-slate-800">
            <a href="index.html"
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
            <h2 class="text-xl font-bold text-slate-800">Gestion des Rôles</h2>
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

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

                <!-- Create Role Form -->
                <div class="lg:col-span-1" id="role-creation-container">
                    <div class="bg-white rounded-xl border border-gray-100 shadow-sm p-6" id="role-creation-card">
                        <h3 class="font-bold text-slate-800 text-lg mb-4">Créer un nouveau rôle</h3>
                        <form action="{{$route}}" class="space-y-4" method="POST">
                            @csrf
                            @method($method)
                            <div>
                                <label for="name" class="block text-sm font-medium text-slate-700 mb-1">Nom du
                                    Rôle</label>
                                <input type="text" id="name" name="name" value="{{ $role->name ?? ''}}"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-500 focus:border-brand-500 outline-none transition-all placeholder-gray-400"
                                    placeholder="Ex: Modérateur">
                                 @error('name')
                                   <p class="text-red-500">{{ $message }}</p>
                                 @enderror
                            </div>

                            <div id="permissions-section" class="mt-4 hidden">
                                <label class="block text-sm font-medium text-slate-700 mb-2">Permissions</label>
                                <div class="space-y-3">
                                    @foreach ($permissions as $permission)
                                        
                                    <label class="flex items-center">
                                        <input type="checkbox" name="permissions[]" value="{{$permission->name}}"
                                        class="w-4 h-4 text-brand-600 border-gray-300 rounded focus:ring-brand-500">
                                        <span class="ml-2 text-sm text-slate-600">{{$permission->name}}</span>
                                    </label>
                                    @endforeach
                                   
                                </div>
                            </div>

                            <button type="submit" id="submit-btn"
                                class="w-full px-4 py-2.5 rounded-lg bg-brand-600 text-white font-medium hover:bg-brand-700 transition-colors shadow-lg shadow-brand-500/30">
                                Ajouter
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Roles List -->
                <div class="lg:col-span-2" id="roles-list-section">
                    <div class="bg-white rounded-xl border border-gray-100 shadow-sm overflow-hidden">
                        <div class="px-6 py-4 border-b border-gray-100">
                            <h3 class="font-bold text-slate-800 text-lg">Liste des rôles</h3>
                        </div>
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr
                                    class="bg-gray-50 text-slate-600 text-xs uppercase tracking-wider border-b border-gray-200">
                                    <th class="px-6 py-4 font-semibold">Nom du Rôle</th>
                                    <th class="px-6 py-4 font-semibold text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                <!-- Role 1 -->
                                @foreach ($roles as $role)
                                    
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4">
                                        <span
                                        class="bg-purple-100 text-purple-700 text-xs font-semibold px-2.5 py-0.5 rounded border border-purple-200">{{$role->name}}</span>
                                    </td>
                                    <td class="px-6 py-4 text-right space-x-2 ">

                                       
                                        
                                            
                                            <a href="{{ route('roles.edit',$role->id) }}" 
                                            class="text-brand-600 hover:text-brand-800 font-medium text-sm">Éditer
                                            </a>
                                        

                                        <form action="{{ route('roles.destroy',$role->id) }}" method="POST">
                                            @method('delete')
                                            @csrf

                                            <button type="submit"
                                            class="text-red-500 hover:text-red-700 font-medium text-sm">Supprimer</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach

                                <!-- Role 2 -->
                                {{-- <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4">
                                        <span
                                            class="bg-blue-100 text-blue-700 text-xs font-semibold px-2.5 py-0.5 rounded border border-blue-200">Éditeur</span>
                                    </td>
                                    <td class="px-6 py-4 text-slate-600">5 utilisateurs</td>
                                    <td class="px-6 py-4 text-right space-x-2">
                                        <a href="#"
                                            class="text-brand-600 hover:text-brand-800 font-medium text-sm">Éditer</a>
                                        <button
                                            class="text-red-500 hover:text-red-700 font-medium text-sm">Supprimer</button>
                                    </td>
                                </tr> --}}

                                <!-- Role 3 -->
                                {{-- <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4">
                                        <span
                                            class="bg-orange-100 text-orange-700 text-xs font-semibold px-2.5 py-0.5 rounded border border-orange-200">Gestionnaire</span>
                                    </td>
                                    <td class="px-6 py-4 text-slate-600">2 utilisateurs</td>
                                    <td class="px-6 py-4 text-right space-x-2">
                                        <a href="#"
                                            class="text-brand-600 hover:text-brand-800 font-medium text-sm">Éditer</a>
                                        <button
                                            class="text-red-500 hover:text-red-700 font-medium text-sm">Supprimer</button>
                                    </td>
                                </tr> --}}
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </div>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const form = document.querySelector('form');
            const nameInput = document.getElementById('name');
            const permissionsSection = document.getElementById('permissions-section');
            const rolesListSection = document.getElementById('roles-list-section');
            const submitBtn = document.getElementById('submit-btn');

            submitBtn.addEventListener('click', (e) => {
                // If permissions are hidden, we are in step 1
                if (permissionsSection.classList.contains('hidden')) {
                    e.preventDefault(); // Stop form submission

                    if (nameInput.value.trim() === "") {
                        alert("Veuillez entrer un nom de rôle.");
                        return;
                    }

                    // Transition to step 2
                    nameInput.readonly = true;
                    nameInput.classList.add('bg-gray-100', 'cursor-not-allowed');

                    permissionsSection.classList.remove('hidden');
                    rolesListSection.classList.add('hidden');

                    // Center the form
                    const roleCreationContainer = document.getElementById('role-creation-container');
                    const roleCreationCard = document.getElementById('role-creation-card');

                    roleCreationContainer.classList.remove('lg:col-span-1');
                    roleCreationContainer.classList.add('lg:col-span-3');
                    roleCreationCard.classList.add('max-w-2xl', 'mx-auto');

                    submitBtn.textContent = "Sauvegarder le Rôle";
                    submitBtn.type = "submit"; // Ensure next click submits
                }
            });
        });
    </script>
@endsection