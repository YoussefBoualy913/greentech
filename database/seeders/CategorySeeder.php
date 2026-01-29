<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {  
        $now = now();
      Category::insert([
    ['name' => 'Plantes', 'created_at' => $now, 'updated_at' => $now],
    ['name' => 'Graines', 'created_at' => $now, 'updated_at' => $now],
    ['name' => 'Outils',  'created_at' => $now, 'updated_at' => $now],
]);
    }
}
