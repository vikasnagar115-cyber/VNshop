<?php

namespace Database\Seeders;

<<<<<<< Updated upstream
<<<<<<< Updated upstream
use App\Models\Product;
use App\Models\Category;
=======
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
>>>>>>> Stashed changes
=======
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
>>>>>>> Stashed changes
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Laptop Dell XPS 13',
                'sku' => 'DELL-XPS-13-001',
                'category' => 'Electronics',
                'price' => 999.99,
                'stock' => 15,
                'description' => 'High-performance laptop with Intel i5 processor',
            ],
            [
                'name' => 'iPhone 15 Pro',
                'sku' => 'IPHONE-15-PRO-001',
                'category' => 'Electronics',
                'price' => 1299.99,
                'stock' => 20,
                'description' => 'Latest Apple iPhone with A17 Pro chip',
            ],
            [
                'name' => 'Samsung TV 55"',
                'sku' => 'SAMSUNG-TV-55-001',
                'category' => 'Electronics',
                'price' => 799.99,
                'stock' => 8,
                'description' => '4K Ultra HD Smart TV',
            ],
            [
                'name' => 'Wireless Headphones Sony',
                'sku' => 'SONY-WH-1000XM5-001',
                'category' => 'Electronics',
                'price' => 349.99,
                'stock' => 30,
                'description' => 'Noise-cancelling wireless headphones',
            ],
            [
                'name' => 'Cotton T-Shirt Blue',
                'sku' => 'TSHIRT-BLUE-M-001',
                'category' => 'Clothing',
                'price' => 29.99,
                'stock' => 100,
                'description' => '100% cotton comfortable t-shirt',
            ],
            [
                'name' => 'Denim Jeans Black',
                'sku' => 'JEANS-BLACK-32-001',
                'category' => 'Clothing',
                'price' => 59.99,
                'stock' => 50,
                'description' => 'Classic black denim jeans',
            ],
            [
                'name' => 'Running Shoes Nike',
                'sku' => 'NIKE-RUN-001',
                'category' => 'Clothing',
                'price' => 119.99,
                'stock' => 40,
                'description' => 'Comfortable running shoes for daily wear',
            ],
            [
                'name' => 'The Great Gatsby',
                'sku' => 'BOOK-GATSBY-001',
                'category' => 'Books',
                'price' => 14.99,
                'stock' => 60,
                'description' => 'Classic novel by F. Scott Fitzgerald',
            ],
            [
                'name' => 'To Kill a Mockingbird',
                'sku' => 'BOOK-MOCKINGBIRD-001',
                'category' => 'Books',
                'price' => 12.99,
                'stock' => 45,
                'description' => 'Pulitzer Prize-winning novel',
            ],
            [
                'name' => 'Python Programming Guide',
                'sku' => 'BOOK-PYTHON-001',
                'category' => 'Books',
                'price' => 44.99,
                'stock' => 25,
                'description' => 'Comprehensive guide to Python programming',
            ],
            [
                'name' => 'Stainless Steel Cookware Set',
                'sku' => 'COOKWARE-SET-001',
                'category' => 'Home & Kitchen',
                'price' => 149.99,
                'stock' => 20,
                'description' => '10-piece cookware set with non-stick coating',
            ],
            [
                'name' => 'Coffee Maker Deluxe',
                'sku' => 'COFFEE-MAKER-001',
                'category' => 'Home & Kitchen',
                'price' => 89.99,
                'stock' => 35,
                'description' => 'Programmable coffee maker with thermal carafe',
            ],
            [
                'name' => 'Football Soccer Ball Pro',
                'sku' => 'FOOTBALL-PRO-001',
                'category' => 'Sports',
                'price' => 49.99,
                'stock' => 55,
                'description' => 'Professional-grade football for competitive play',
            ],
            [
                'name' => 'Yoga Mat Premium',
                'sku' => 'YOGA-MAT-001',
                'category' => 'Sports',
                'price' => 39.99,
                'stock' => 70,
                'description' => 'Non-slip yoga mat with carrying strap',
=======
=======
>>>>>>> Stashed changes
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get categories
        $electronics = Category::where('name', 'Electronics')->first();
        $clothing = Category::where('name', 'Clothing')->first();
        $books = Category::where('name', 'Books')->first();
        $home = Category::where('name', 'Home & Kitchen')->first();
        $sports = Category::where('name', 'Sports')->first();
        $beauty = Category::where('name', 'Beauty & Personal Care')->first();

        $products = [
            // Electronics
            [
                'name' => 'Wireless Headphones',
                'sku' => 'WH-001',
                'category_id' => $electronics->id,
                'price' => 2999.00,
                'stock' => 50,
                'description' => 'Premium wireless headphones with noise cancellation',
            ],
            [
                'name' => 'USB-C Cable',
                'sku' => 'USB-001',
                'category_id' => $electronics->id,
                'price' => 499.00,
                'stock' => 100,
                'description' => 'Durable USB-C charging and data transfer cable',
            ],
            [
                'name' => 'Power Bank 20000mAh',
                'sku' => 'PB-001',
                'category_id' => $electronics->id,
                'price' => 1499.00,
                'stock' => 75,
                'description' => 'Fast charging power bank with dual ports',
            ],
            // Clothing
            [
                'name' => 'Cotton T-Shirt',
                'sku' => 'CT-001',
                'category_id' => $clothing->id,
                'price' => 599.00,
                'stock' => 150,
                'description' => 'Comfortable 100% cotton t-shirt',
            ],
            [
                'name' => 'Jeans',
                'sku' => 'JN-001',
                'category_id' => $clothing->id,
                'price' => 1299.00,
                'stock' => 80,
                'description' => 'Classic blue denim jeans',
            ],
            [
                'name' => 'Hoodie',
                'sku' => 'HD-001',
                'category_id' => $clothing->id,
                'price' => 1799.00,
                'stock' => 60,
                'description' => 'Warm and cozy hoodie',
            ],
            // Books
            [
                'name' => 'Laravel Guide',
                'sku' => 'BK-001',
                'category_id' => $books->id,
                'price' => 799.00,
                'stock' => 40,
                'description' => 'Complete guide to Laravel web development',
            ],
            [
                'name' => 'The Art of Programming',
                'sku' => 'BK-002',
                'category_id' => $books->id,
                'price' => 899.00,
                'stock' => 35,
                'description' => 'Master the fundamentals of programming',
            ],
            // Home & Kitchen
            [
                'name' => 'Coffee Maker',
                'sku' => 'HK-001',
                'category_id' => $home->id,
                'price' => 2499.00,
                'stock' => 30,
                'description' => 'Automatic drip coffee maker',
            ],
            [
                'name' => 'Cooking Spoon Set',
                'sku' => 'HK-002',
                'category_id' => $home->id,
                'price' => 549.00,
                'stock' => 90,
                'description' => 'Non-stick cooking spoon set (5 pieces)',
            ],
            // Sports
            [
                'name' => 'Yoga Mat',
                'sku' => 'SP-001',
                'category_id' => $sports->id,
                'price' => 1099.00,
                'stock' => 45,
                'description' => 'Non-slip yoga mat for all exercises',
            ],
            [
                'name' => 'Dumbbells (5kg pair)',
                'sku' => 'SP-002',
                'category_id' => $sports->id,
                'price' => 1599.00,
                'stock' => 55,
                'description' => 'Adjustable dumbbells for home gym',
            ],
            // Beauty & Personal Care
            [
                'name' => 'Face Wash',
                'sku' => 'BC-001',
                'category_id' => $beauty->id,
                'price' => 349.00,
                'stock' => 120,
                'description' => 'Gentle face wash for all skin types',
            ],
            [
                'name' => 'Moisturizer Cream',
                'sku' => 'BC-002',
                'category_id' => $beauty->id,
                'price' => 599.00,
                'stock' => 85,
                'description' => 'Hydrating moisturizer with natural ingredients',
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
            ],
        ];

        foreach ($products as $product) {
<<<<<<< Updated upstream
<<<<<<< Updated upstream
            $category = Category::where('name', $product['category'])->first();
            
            if ($category) {
                Product::firstOrCreate(
                    ['sku' => $product['sku']],
                    [
                        'name' => $product['name'],
                        'category_id' => $category->id,
                        'price' => $product['price'],
                        'stock' => $product['stock'],
                        'description' => $product['description'],
                    ]
                );
            }
=======
=======
>>>>>>> Stashed changes
            Product::firstOrCreate(
                ['sku' => $product['sku']],
                $product
            );
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
        }
    }
}
