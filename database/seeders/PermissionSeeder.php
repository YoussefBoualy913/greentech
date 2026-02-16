<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $permissions = [
    // Products (admin)
    'view products',
    'create products',
    'edit products',
    'delete products',
    'export products',

    // Users
    'view users',
    'create users',
    'edit users',
    'delete users',

    // Roles
    'view roles',
    'create roles',
    'edit roles',
    'delete roles',

    // Client
    'view favorites',
    'add favorite',
];
foreach ($permissions as $name) {
        Permission::findOrCreate($name);   
    }
    }
}
