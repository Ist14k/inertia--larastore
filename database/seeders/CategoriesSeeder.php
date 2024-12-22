<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            // four parent categories and two child categories for electronics department id - 1
            [
                'name' => 'Mobile Phones',
                'slug' => Str::slug('Mobile Phones'),
                'department_id' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Laptops',
                'slug' => Str::slug('Laptops'),
                'department_id' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Tablets',
                'slug' => Str::slug('Tablets'),
                'department_id' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Smart Watches',
                'slug' => Str::slug('Smart Watches'),
                'department_id' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Mobile Accessories',
                'slug' => Str::slug('Mobile Accessories'),
                'department_id' => 1,
                'parent_id' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Laptop Accessories',
                'slug' => Str::slug('Laptop Accessories'),
                'department_id' => 1,
                'parent_id' => 2,
                'is_active' => true,
            ],
            // four parent categories and two child categories for clothing department id=2
            [
                'name' => 'Men\'s Clothing',
                'slug' => Str::slug('Mens Clothing'),
                'department_id' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Women\'s Clothing',
                'slug' => Str::slug('Womens Clothing'),
                'department_id' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Kids Clothing',
                'slug' => Str::slug('Kids Clothing'),
                'department_id' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Shoes',
                'slug' => Str::slug('Shoes'),
                'department_id' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Men\'s Accessories',
                'slug' => Str::slug('Mens Accessories'),
                'department_id' => 2,
                'parent_id' => 7,
                'is_active' => true,
            ],
            [
                'name' => 'Women\'s Accessories',
                'slug' => Str::slug('Womens Accessories'),
                'department_id' => 2,
                'parent_id' => 8,
                'is_active' => true,
            ],
            // Books department categories (id=3)
            [
                'name' => 'Fiction',
                'slug' => Str::slug('Fiction'),
                'department_id' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'Non-Fiction',
                'slug' => Str::slug('Non-Fiction'),
                'department_id' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'Academic',
                'slug' => Str::slug('Academic'),
                'department_id' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'Children Books',
                'slug' => Str::slug('Children Books'),
                'department_id' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'Fiction Series',
                'slug' => Str::slug('Fiction Series'),
                'department_id' => 3,
                'parent_id' => 13,
                'is_active' => true,
            ],
            [
                'name' => 'Text Books',
                'slug' => Str::slug('Text Books'),
                'department_id' => 3,
                'parent_id' => 15,
                'is_active' => true,
            ],
            // Furniture department categories (id=4)
            [
                'name' => 'Living Room',
                'slug' => Str::slug('Living Room'),
                'department_id' => 4,
                'is_active' => true,
            ],
            [
                'name' => 'Bedroom',
                'slug' => Str::slug('Bedroom'),
                'department_id' => 4,
                'is_active' => true,
            ],
            [
                'name' => 'Office',
                'slug' => Str::slug('Office'),
                'department_id' => 4,
                'is_active' => true,
            ],
            [
                'name' => 'Kitchen',
                'slug' => Str::slug('Kitchen'),
                'department_id' => 4,
                'is_active' => true,
            ],
            [
                'name' => 'Sofas',
                'slug' => Str::slug('Sofas'),
                'department_id' => 4,
                'parent_id' => 19,
                'is_active' => true,
            ],
            [
                'name' => 'Beds',
                'slug' => Str::slug('Beds'),
                'department_id' => 4,
                'parent_id' => 20,
                'is_active' => true,
            ],
            // Appliances department categories (id=5)
            [
                'name' => 'Kitchen Appliances',
                'slug' => Str::slug('Kitchen Appliances'),
                'department_id' => 5,
                'is_active' => true,
            ],
            [
                'name' => 'Laundry',
                'slug' => Str::slug('Laundry'),
                'department_id' => 5,
                'is_active' => true,
            ],
            [
                'name' => 'Air Conditioning',
                'slug' => Str::slug('Air Conditioning'),
                'department_id' => 5,
                'is_active' => true,
            ],
            [
                'name' => 'Home Entertainment',
                'slug' => Str::slug('Home Entertainment'),
                'department_id' => 5,
                'is_active' => true,
            ],
            [
                'name' => 'Small Kitchen Appliances',
                'slug' => Str::slug('Small Kitchen Appliances'),
                'department_id' => 5,
                'parent_id' => 25,
                'is_active' => true,
            ],
            [
                'name' => 'TV & Audio',
                'slug' => Str::slug('TV and Audio'),
                'department_id' => 5,
                'parent_id' => 28,
                'is_active' => true,
            ],
        ];

        for ($i = 0; $i < count($categories); $i++) {
            $categories[$i]['created_at'] = now();
            $categories[$i]['updated_at'] = now();
        }

        for ($i = 0; $i < count($categories); $i++) {
            Category::create($categories[$i]);
        }
    }
}
