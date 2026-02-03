<?php

namespace Database\Seeders;

use App\Models\Category;
<<<<<<< Updated upstream
<<<<<<< Updated upstream
=======
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
>>>>>>> Stashed changes
=======
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
>>>>>>> Stashed changes
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    /**
     * Seed the application's database.
=======
=======
>>>>>>> Stashed changes
    use WithoutModelEvents;

    /**
     * Run the database seeds.
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Electronics',
                'description' => 'Electronic devices and gadgets',
            ],
            [
                'name' => 'Clothing',
<<<<<<< Updated upstream
<<<<<<< Updated upstream
                'description' => 'Fashion and apparel items',
            ],
            [
                'name' => 'Books',
                'description' => 'Books and reading materials',
            ],
            [
                'name' => 'Home & Kitchen',
                'description' => 'Home and kitchen essentials',
            ],
            [
                'name' => 'Sports',
                'description' => 'Sports equipment and gear',
            ],
            [
                'name' => 'Beauty & Personal Care',
                'description' => 'Beauty and personal care products',
=======
=======
>>>>>>> Stashed changes
                'description' => 'Men, Women and Kids clothing',
            ],
            [
                'name' => 'Books',
                'description' => 'Physical and digital books',
            ],
            [
                'name' => 'Home & Kitchen',
                'description' => 'Home appliances and kitchen items',
            ],
            [
                'name' => 'Sports',
                'description' => 'Sports equipment and accessories',
            ],
            [
                'name' => 'Beauty & Personal Care',
                'description' => 'Beauty products and personal care items',
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
            ],
        ];

        foreach ($categories as $category) {
            Category::firstOrCreate(
                ['name' => $category['name']],
<<<<<<< Updated upstream
<<<<<<< Updated upstream
                ['description' => $category['description']]
=======
                $category
>>>>>>> Stashed changes
=======
                $category
>>>>>>> Stashed changes
            );
        }
    }
}
